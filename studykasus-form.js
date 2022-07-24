function buat_login() {
    var elem = document.getElementById('x')
    elem.parentElement.removeChild(elem)
    var p = document.createElement("p")
    p.className = "tulisan_login"
    p.innerHTML = "Silahkan Login"

    var element = document.getElementsByTagName('div')[0]
    element.appendChild(p)
    //memasukkan form
    var form = document.createElement("FORM")
    element.appendChild(form)

    //membuat username 
    var label = document.createElement("label")
    label.innerHTML = "Username"
    form.appendChild(label)
    var input_username = document.createElement("input")
    input_username.type = "text"
    input_username.name = "username"
    input_username.className = "form_login"
    input_username.placeholder = "Silahkan masukkan username"
    form.appendChild(input_username)

    //membuat password 
    var label2 = document.createElement("label")
    label2.innerHTML = "Password"
    form.appendChild(label2)
    var input_password = document.createElement("input")
    input_password.type = "password"
    input_password.name = "password"
    input_password.className = "form_login"
    form.appendChild(input_password)

    //membuat button submit 
    var submit = document.createElement("input")
    submit.className = "tombol_login"
    submit.type = "submit"
    form.appendChild(submit)
}