<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
	
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 40%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

</style>
<div class="row">
	<div class="col s12">
		<div class="row center">
			<h1><?= $post->name; ?></h1>
		</div>
		
		<div class="row center ">
			<img src="<?= site_url('upload/post/'.$post->filename); ?>" alt="Post's Image" width="40%" style="border-radius:8px; font-family: Roboto;";>
			<div class="overlay">
    			<div class="text"><?= $post->name; ?></div>
  			</div>
		</div>
		<div class="row center">
			<p><?= $post->description; ?></p>
		</div>
		<div class="row">
			<div class="center col s6">
				<button class ="btn blue" style="margin-right: 10px; border-radius:8px";>
				<a href="<?= site_url('welcome/update/'.$post->id); ?>" class="white-text">Perbarui</a>
			</div>
			<div class="center col s6">
				<button onclick="ConfirmDelete()" class ="btn red" style="margin-right: 10px; border-radius:8px; " ;>
				<a href="<?= site_url('welcome/delete/'.$post->id); ?>" class="white-text" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
			</div>
		</div>
	</div>
</div>