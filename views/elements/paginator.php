<?php for($page=1; $page<=$this->pageCount; $page++) { ?>
        <a href="?page=<?echo $page?>" style="color: <?echo ($_GET['page']??null) == $page ? 'black' : 'gray' ?>;"><?echo $page?></a>
<? } ?>