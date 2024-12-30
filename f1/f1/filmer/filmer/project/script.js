document.querySelector('.img-btn').addEventListener('click',function () {

    document.querySelector('.cont').classList.toggle('s-signup')



    const form = document.querySelector('.sign-in');
    form.addEventListener('submit11', (event) => {
        event.preventDefault();
        validate();
    });


    function validate() {
        const password = document.getElementById('passwords');
        const confirmPassword = document.getElementById('confirms');
        if (password.value !== confirmPassword.value) {
            alert('Passwords do not match. Please try again.');
            return false;
        }
        return true;
    }


});


function Err()
{
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Email or password is worng",
        footer: '<a href="#">Please try agin </a>'
      });
}

function MSG(name)
{
    Swal.fire({
        title: "Welcome " + name ,
        text: "Please login now",
        icon: "success"
      });
}
