function login() {
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    if (username == 'raihanpr' && password == 'kepoanda') {
        alert('Anda Berhasil Login')
        window.location = ('loginberhasil.html')
    }
    else if (username == '' && password == '') {
        alert('Username dan Password Tidak Boleh Kosong')
    }
    else if (username == 'raihanpr' && password != 'kepoanda') {
        alert('Password Anda Salah')
    }
    else if (username != 'raihanpr' && password == 'kepoanda') {
        alert('Username Anda Salah')
    }
    else if (username != 'raihanpr' && password != 'kepoanda') {
        alert('Username dan Password Anda Salah')
    }
}