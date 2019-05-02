function updatePreviews() {
    let files = this.files;
    let attachments = document.getElementById("attachments");

    if (! files) return;

    for (let i = 0; i < files.length; i++) {
        if (! files[i]) continue;

        let n = files[i].name;
        // console.log("File name: ", n);
        n = n.split(".");
        n = (n.length > 0) ? n[n.length -1] : "";
        // console.log("Extension: ", n);
        
        // Add icon depending on the type, except when it is image
        let src = "";
        if (n == "") {
            src = "assets/img/no-ext-file.svg";
        } else if (n == "jpeg" || n == "jpg" || n == "png" || n == "gif" || n == "svg") {
            src = "";
        } else if (n == "zip" || n == "7zip" || n == "rar" || n == "tar" || n == "tar.xz") {
            src = "assets/img/zip.svg";
        } else {
            src = "assets/img/file.svg";
        }

        let obj = new FileReader();
        obj.onload = function(data) {
            // console.log(data.target.result);

            let item = document.createElement("div");
            item.setAttribute("class", "item");
            let image = document.createElement("img");
            image.src = (src == "") ? data.target.result : src;
            item.appendChild(image);
            
            attachments.innerHTML = "";
            attachments.appendChild(item);
        };
        obj.readAsDataURL(files[i]);
    }
}