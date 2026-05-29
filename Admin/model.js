

document.querySelectorAll('.open-modal')
.forEach(function(button){
    button.addEventListener('click',function(){

        var modalId = this.getAttribute('data-modal');

        if(modalId=="open-std-profile"){
        document.getElementById("modal-id").textContent = this.dataset.id;
        document.getElementById("modal-name").textContent = this.dataset.name;
        document.getElementById("modal-email").textContent = this.dataset.email;
        document.getElementById("modal-mobile").textContent = this.dataset.mobile;
        document.getElementById("modal-address").textContent = this.dataset.address;
        document.getElementById("modal-department").textContent = this.dataset.department;
        document.getElementById("modal-year").textContent = this.dataset.year;
        }

        if(modalId=="open-fac-profile"){
        document.getElementById("modal-id").textContent = this.dataset.id;
        document.getElementById("modal-name").textContent = this.dataset.name;
        document.getElementById("modal-email").textContent = this.dataset.email;
        document.getElementById("modal-mobile").textContent = this.dataset.mobile;
        document.getElementById("modal-address").textContent = this.dataset.address;
        document.getElementById("modal-department").textContent = this.dataset.department;
        document.getElementById("modal-year").textContent = this.dataset.year;
        }

        document.getElementById(modalId).classList.add('show');
    });
});

document.querySelectorAll('.close-modal')
.forEach(function(button){
    button.addEventListener('click',function(e){
        e.stopPropagation();
        document.querySelectorAll('.model-container,.dashboard-activity-container')
        .forEach(function(modal){
            modal.classList.remove('show');
        });
    });
});


function add_cancle(){
    
   var test = confirm("Are you Sure This details will not be saved!");
    
    if(test){window.location.href = "youtube.com";}else{
   event.preventDefault();
    }
}   

// function student_modal(){

//         document.querySelectorAll('.open-modal')
//     .forEach(function(button){
//         button.addEventListener('click',function(){

//             document.getElementById("modal-id").textContent = this.dataset.id;
//             document.getElementById("modal-name").textContent = this.dataset.name;
//             document.getElementById("modal-email").textContent = this.dataset.email;
//             document.getElementById("modal-mobile").textContent = this.dataset.mobile;
//             document.getElementById("modal-address").textContent = this.dataset.address;
//             document.getElementById("modal-department").textContent = this.dataset.department;
//             document.getElementById("modal-year").textContent = this.dataset.year;

//             var modalId = this.getAttribute('data-modal');
//             document.getElementById(modalId).classList.add('show');
//         });
//     });
// }