function buat_login() {
    var elem = document.getElementById('x')
    elem.parentElement.removeChild(elem)
    var p = document.createElement("p")
    p.className = "tulisan_login"
    p.innerHTML = "Silahkan Mendaftar"

    var element = document.getElementsByTagName('div')[0]
    element.appendChild(p)
    
    var form = document.createElement("form")
    form.method = "POST"
    element.appendChild(form)

    var label1 = document.createElement("label")
    label1.innerHTML = "Nama User"
    form.appendChild(label1)

    var input_username = document.createElement("input")
    input_username.type = "text"
    input_username.name = "username"
    input_username.className = "form_login"
    input_username.placeholder = "Nama User.."
    form.appendChild(input_username)

    var label2 = document.createElement("label")
    label2.innerHTML = "Nomor Handphone"
    form.appendChild(label2)

    var input_hp = document.createElement("input")
    input_hp.type = "text"
    input_hp.name = "handphone"
    input_hp.className = "form_login"
    input_hp.placeholder = "Nomor Handphone.."
    form.appendChild(input_hp)

    var label3 = document.createElement("label")
    label3.innerHTML = "Username"
    form.appendChild(label3)

    var input_email = document.createElement("input")
    input_email.type = "email"
    input_email.name = "email"
    input_email.className = "form_login"
    input_email.placeholder = "Username atau email.."
    form.appendChild(input_email)

    var label4 = document.createElement("label")
    label4.innerHTML = "Password"
    form.appendChild(label4)

    var input_password = document.createElement("input")
    input_password.type = "password"
    input_password.name = "password"
    input_password.className = "form_login"
    input_password.placeholder = "password.."
    form.appendChild(input_password)

    var label5 = document.createElement("button")
    label5.type = "submit"
    label5.innerHTML = "Daftar Sekarang"
    label5.className = "tombol_login"
    form.appendChild(label5)
}

