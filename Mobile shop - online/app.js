user = localStorage.getItem('data')
table = localStorage.getItem('table')
document.getElementById('show_user').innerHTML = `- welcome ${user} -`

let Delete = (u, item) => {
  u.parentElement.parentElement.remove()
  selecting.splice(selecting.indexOf(item), 1)
  console.log(selecting);
}

let DeleteMethod = () => {
  document.getElementById('popid').remove()
}

let additem = () => {
  try {
    document.getElementById('delteing').remove()
    DeleteMethod()
  } catch (error) {
    try {
      DeleteMethod()
    } catch (error) {
      console.log('hi');
    }
  }
  $('.method').append(`<div class="pop" id='popid'>
    <form method="POST" autocomplete="off">
      <input type="text" name="nameadd" placeholder="Enter item Name">
      <input type="text" name="linkadd" placeholder="Enter item Image URL">
      <input type="submit" name="okay" value="Add Item">
      <input type="button" value="close" onclick='DeleteMethod()'>
    </form>
  </div>`)
}

let order = () => {
  all = []
  all.push({user})
  for (i=0;i!=selecting.length;++i){
    io = document.getElementById('item')
    nm = io.parentElement.children[0].children[i].children[0].children[0].innerHTML
    qty  = io.parentElement.children[0].children[i].children[1].children[1].innerHTML
    all.push({nm,qty})
  }

  $.ajax({
    url: "saveorder.php",
    method : 'post',
    data: {d : JSON.stringify( all )},
    success: function (response) {
      console.log(response);
    }
  });
  alert('Order has Been Sent to client')
}

let dec = (i) => {
  if (parseInt(i.parentElement.children[1].innerHTML) != 1)
    i.parentElement.children[1].innerHTML = parseInt(i.parentElement.children[1].innerHTML) - 1
}

let inc = (i) => {
  i.parentElement.children[1].innerHTML = parseInt(i.parentElement.children[1].innerHTML) + 1
}


let add = (i) => {
  if (!selecting.includes(i.parentElement.children[2].innerHTML)) {
    let code = `<tr id='dis'>
                <th id='ko'> <b style='color:Darkblue'>${i.parentElement.children[2].innerHTML}</b></th> 
                <th id='ko'> <button id='minas' onclick="dec(this)">-</button>
                 <b>1</b>
                <button id='plus' onclick="inc(this)">+</button> </th>
                <th id='ko'> <i style="margin-left:30px;" onclick="Delete(this,'${i.parentElement.children[2].innerHTML}')" class="fa-solid fa-trash-can"></i> </th>
            </tr>`
    $('#item').append(code)
    document.getElementById('item').scrollIntoView()
    selecting.push(i.parentElement.children[2].innerHTML)
  } else {
    alert(' - Already Item Added -')
  }
}

let initialadd = (name,qty) => {
  let code = `<tr id='dis'>
                <th id='ko'> <b style='color:darkblue'>${name}</b></th> 
                <th id='ko'> <button id='minas' onclick="dec(this)">-</button>
                 <b>${qty}</b>
                <button id='plus' onclick="inc(this)">+</button> </th>
                <th id='ko'> <i style="margin-left:30px;" onclick="Delete(this,'${name}')" class="fa-solid fa-trash-can"></i> </th>
            </tr>`
    $('#item').append(code)
    selecting.push(name)
}

let lo = () => {
  localStorage.setItem('data', '')
  window.location.href = 'login.php';
}
admin = ['Admin', 'SaJiTh']
if (admin.includes(user)) {
  document.getElementById('useronly').remove()
  ok = ` <center>
    <form method="post">

    <a href=''><input
    type="button"
    value="Home Page"
    id="out_stand" /> </a>

    <input
    type="button"
    onclick="additem()"
    value="Add a Item"
    id="out_stand"
    name="add"/>

  <input
    type="submit"
    onclick=""
    value="Delete a Item"
    id="out_stand"
    name="del"/>

  <input
    type="submit"
    onclick=""
    value="View Order Details"
    id="out_stand"
    name="view" />
    </form>
        </center>           
            `
  $('#access').append(ok)
}