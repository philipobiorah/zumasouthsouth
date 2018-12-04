/* Image extension validation*/
function validateImage(id) {
    var formData = new FormData();
	var id = id;
    var file = document.getElementById(id).files[0];
 
    formData.append("Filedata", file);
    var type = file.type.split('/').pop().toLowerCase();
    if (type != "jpeg" && type != "jpg" && type != "png" && type != "gif") {
		document.getElementById("imageError").innerHTML = "Please select a valid image file. VALID: jpg,jpeg,gif,png";
        document.getElementById(id).value = '';
        return false;
    }
	else
		document.getElementById("imageError").innerHTML = "";
    if (file.size > 2048000) {
        document.getElementById("imageError").innerHTML = "Image size should not be more than 2mb";
        document.getElementById(id).value = '';
        return false;
    }
	else{
		document.getElementById("imageError").innerHTML = "";
		return true;
	}
	
}

/* Video extension validation*/
function validateVideo() {
    var formData = new FormData();
 
    var file = document.getElementById("film").files[0];
 
    formData.append("Filedata", file);
    var type = file.type.split('/').pop().toLowerCase();
    if (type != "mp4" && type != "webm" && type != "ogg") {
		document.getElementById("videoError").innerHTML = "Please select a valid video file. VALID: mp4,ogg, webm";
        document.getElementById("film").value = '';
        return false;
    }
	else
		document.getElementById("videoError").innerHTML = "";
    if (file.size > 700000000) {
        document.getElementById("videoError").innerHTML = "video size should not be more than 100mb";
        document.getElementById("film").value = '';
        return false;
    }
	else{
		document.getElementById("videoError").innerHTML = "";
		return true;
	}
		
}