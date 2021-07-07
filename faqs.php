<?php include 'header.php';?>
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">FAQs</h1>
</div>
<div style="margin-left:200px;width:800px;">
<button class="accordionf">What's the maximum size of file we can be upload?</button>
<div class="panelf">
<p>The maximum uploading size is up to <b>50MB</b>.</p>
</div>
<button class="accordionf">Can we upload folder?</button>
<div class="panelf">
<p>Yes, you can upload a folder.
</div>
<button class="accordionf">How to upload a file?</button>
<div class="panelf">
<p>Select <b>My Files</b> then , Choose <b>Upload File</b> option, Choose the file which you want to upload, and click on <b>OK</b> button to upload your File.</p>
</div>
<button class="accordionf">How do I know how much space I have used so far?</button>
<div class="panelf">
<p>You can see by clicking on the <b>Dashboard</b>.</p>
</div>
<button class="accordionf">What type of files can we upload?</button>
<div class="panelf">
<p>Except <b>'.exe ' </b>, all files are acceptable</p>
</div>
<button class="accordionf">How do I change my password?</button>
<div class="panelf">
<p>You can change your password by selecting <b>My Account</b> and then <b>Update Profile</b>.</p>
</div>
<button class="accordionf">Where are my data stored?</button>
<div class="panelf">
<p>Your data is stored in our <b>Highly Encrypted Servers</b>, you can access your files from <b>File section</b>.</p>
</div>
<button class="accordionf"> How can we retrieve the deleted data?</button>
<div class="panelf">
<p>You need become a <b>Premium Member</b> for accessing the deleted data using <b>Trash</b>.</p>
</div>
</div>
</div>
<script>
var acc = document.getElementsByClassName("accordionf");
var i;
for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
this.classList.toggle("active");
var panelf = this.nextElementSibling;
if (panelf.style.maxHeight) {
panelf.style.maxHeight = null;
} else {
panelf.style.maxHeight = panelf.scrollHeight + "px";
}
});
}
</script>
<?php include 'footer.php';?>