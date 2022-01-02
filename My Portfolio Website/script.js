let blogTitle = document.getElementById("form_subject");
let blogContent = document.getElementById("form_message");
let form = document.querySelector("form");

function validateInput() {
    //check title and content are empty 
    if (blogTitle.value.trim() === "") {
        onError(blogTitle);
    } else {
        onSuccess(blogTitle);
    }
    if (blogContent.value.trim() === "") {
        onError(blogContent);
    } else {
        onSuccess(blogContent);
    }
}

function submitValidation(e) {
    e.preventDefault();
    validateInput();
};

function onSuccess(blogTitle) {
    let parent = blogTitle.parentElement;
    parent.classList.remove("error");
    parent.classList.add("success");
}

function onError(blogTitle) {
    let parent = blogTitle.parentElement;
    parent.classList.add("error");
    parent.classList.remove("success");

}