<ul>
<li class = "collection-item avatar yellow lighten-3" style="text-align: center;">
    <?php echo $this->session->flashdata('teks');?></li>    
</ul>

<ul class = "collection "style="border-radius:8px";>
    <?php foreach ($home_post as $data) :?>
    
    <li class = "collection-item avatar red lighten-3">
    <img src="<?=site_url('upload/post/'.$data['filename']) ?>" width="60px" height="60px" style="border-radius:8px; margin-right: 10px; margin-left: -50px; position:absolute";>
        <p style="border-radius:8px; margin-right: 10px; margin-left: 30px; position:absolute; font-size: 22px; font-weight: bold;" ;><?= $data['name'];?> </p>

        <br>

        <p style="border-radius:8px; margin-right: 10px; margin-left: 30px; position:absolute; font-size: 15px;";> <?=$data['description'];?> </p>


        <a href="<?=site_url('welcome/index/'.$data['id'])?>" class="secondary-content">
            <i class="medium material-icons black-text text-darken-4">perm_media</i>
        </a>
    </li>
    <?php endforeach ?>
</ul>
</div>