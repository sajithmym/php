user = localStorage.getItem('data')
table = localStorage.getItem('table')
document.getElementById('show_user').innerHTML = `- welcome ${user} -`
let Delete = (u) => {
    // console.log(u.parentElement.parentElement);
    u.parentElement.parentElement.remove()
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

let add = (i) => {

    let code = `<tr id='dis'>
                <th id='ko'> ${i.parentElement.children[2].innerHTML} </th> 
                <th id='ko'> <i onclick="Delete(this)" class="fa-solid fa-trash-can"></i> </th>
            </tr>`
    $('#item').append(code)
    document.getElementById('item').scrollIntoView()
}

let lo = () =>{
  localStorage.setItem('data','')
  window.location.href = 'login.php';
}
admin = ['Admin', 'Team Fire']
if (admin.includes(user)) {
    ok = ` <center>
    <form method="post">

    <a href='app.php'><input
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
