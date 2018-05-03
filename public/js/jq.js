var form = document.querySelector('#comment-create');
var commentsBlock = document.querySelector('#comments-block');
var button = document.querySelector('#comment-button')
var deleteButtons = document.querySelectorAll('.comment-remove');

function createComment(event) {
    event.preventDefault();


    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/eshop/create/comment');
    xhr.send(formData);

    xhr.onreadystatechange = function() {
        if (xhr.readyState !== 4) return;

        if (xhr.status !== 200)
            alert(xhr.status + ': ' + xhr.statusText);
        else
            commentsBlock.innerHTML += xhr.response;
    };
    document.getElementById('message').value = "";

}
function deleteComment(event){
    event.preventDefault();

    var btn = event.target;
    var id = btn.dataset.id;

    var xhr = new XMLHttpRequest();
    xhr.open('DELETE', '/eshop/remove/comment/' + id);

    xhr.onreadystatechange = function() {
        console.log(xhr.readyState);
        if (xhr.readyState !== 4) return;

        if (xhr.status !== 200) {
            alert(xhr.status + ': ' + xhr.statusText);
        } else {
            var comment = btn.parentElement.parentElement;
            commentsBlock.removeChild(comment);
        }
    };

    xhr.send();
}




button.addEventListener('click', createComment);
deleteButtons.forEach(function (btn) {
    btn.addEventListener('click', deleteComment);
});