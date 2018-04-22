<?php
$web = array("ITMO"=>array("coast"=>"500$","points"=>"10","country"=>"Russia"),"SPBGY"=>array("coast"=>"400$","points"=>"7","country"=>"Russia"),"Garvard"=>array("coast"=>"800$","points"=>"15","country"=>"USA"));
$dataBases = array("Ocvord"=>array("coast"=>"900$","points"=>"17","country"=>"England"),"SPBGU"=>array("coast"=>"400$","points"=>"7","country"=>"Russia"),"Garvard"=>array("coast"=>"850$","points"=>"19","country"=>"USA"));
?>
<script>
    function getIdCheck(id,name) {

    }
</script>

<link rel="stylesheet" href="assets/ace.css" />
<link rel="stylesheet" href="assets/ace-fonts.css" />
<link rel="stylesheet" href="assets/ace-ie.css" />
<link rel="stylesheet" href="assets/ace-part2.css" />
<link rel="stylesheet" href="assets/ace-rtl.css" />
<link rel="stylesheet" href="assets/ace-skins.css" />
<link rel="stylesheet" href="assets/bootstrap.css" />
<link rel="stylesheet" href="assets/pace.css" />
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
<div>
    <p>Название курса:<?=$name?></p>
    <div class="row">
        <div class="col-xs-12">

            <div class="row">
                <div class="col-xs-12">
                    <table id="simple-table" class="table  table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="center">

                            </th>
                            <th>ВУЗ</th>
                            <th>Страна</th>
                            <th class="hidden-480">Цена</th>
                            <th>
                                Баллы
                            </th>
                        </tr>
                        </thead>

                        <tbody>
    <?php
    if ($name == 'Web'){
        $i=0;
    foreach ($web as $key => $values){

        printf(" <tr>
                            <td class='center'>
                                <label class='pos-rel'>
                                    <input type='checkbox' class='ace'  onchange='getIdCheck(%s,%s)' />
                                    <span class='lbl'></span>
                                </label>
                            </td>


                            <td>
                                <a href='#'>%s</a>
                            </td>
                            <td>%s</td>
                            <td class='hidden-480'>%s</td>
                            <td>%s</td>

                        </tr>",$i,'web',$key,$values['country'],$values['coast'],$values['points']);
        $i++;
        }
    }
    else{
        $i=0;
        foreach ($dataBases as $key => $values){
            printf(" <tr>
                            <td class='center'>
                                <label class='pos-rel'>
                                    <input type='checkbox' class='ace' data-name =  onchange='getIdCheck(%s,%s)' />
                                    <span class='lbl'></span>
                                </label>
                            </td>


                            <td>
                                <a href='#'>%s</a>
                            </td>
                            <td>%s</td>
                            <td class='hidden-480'>%s</td>
                            <td>%s</td>

                        </tr>",$i,'dataBases',$key,$values['country'],$values['coast'],$values['points']);
            $i++;
        }
    }
    ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>