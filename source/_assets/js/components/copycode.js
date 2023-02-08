var snippets = document.getElementsByTagName('pre');
var numberOfSnippets = snippets.length;
for (var i = 0; i < numberOfSnippets; i++) {
    code = snippets[i].getElementsByTagName('code')[0].innerText;

    snippets[i].classList.add('hljs'); // append copy button to pre tag

    snippets[i].innerHTML = '<button class="hljs-copy">Copy</button>' + snippets[i].innerHTML; // append copy button

    snippets[i].getElementsByClassName('hljs-copy')[0].addEventListener("click", function () {
        this.innerText = 'Copying..';
        if (!navigator.userAgent.toLowerCase().includes('safari')) {
            navigator.clipboard.writeText(b);
        } else {
            prompt("Clipboard (Select: ⌘+a > Copy:⌘+c)", b);
        }
        this.innerText = 'Copied!';
        button = this;
        setTimeout(function () {
            button.innerText = 'Copy';

        },1000)
    });
}