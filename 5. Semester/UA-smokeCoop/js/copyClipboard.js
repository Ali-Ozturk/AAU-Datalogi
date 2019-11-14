function copyClipboard() {
    var copyText = document.getElementById("setposInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}