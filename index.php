<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</head>
<body>
<form>
  <div class="form-group">
    <label for="word_name" class="form-label">Word</label>
    <input type="text" class="form-control" id="word_name" >
  <div class="mb-3">
    <label for="word_notes" class="form-label">Notes</label>
    <div>
    <textarea id="word_notes">Some text...</textarea> 
	</div>
    <!-- textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
} (css) -->
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>