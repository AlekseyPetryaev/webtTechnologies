<?php
$my_name = 'Aleks';
$profession = 'Junior Developer';
$city_country = 'Moscow, Russia' ;
$e_mail = 'test@gmail.com' ;
$phone_no = '+7926 000 22 22';
$age_years = 2023 - 1991;
$age_days = $age_years * 365.25;
$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Илюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
    [
        'name' => 'Python',
        'percent' => 3,
    ],
];
$language = [
    [
        'name' => 'Babryiskei',
        'percent' => 87,
    ],
];
$work = [
    [
        'name' => 'Банк', 
        'data' => 'Mar 2023 -Current',
        'functional' => 'Занимался приемкой вкладов и других видов сбережений, платежных документов, следил за 
        правильностью их оформления. Подготавливал выписки клиенту по расчетному счету, составлял 
        деловые документы, рассчитывал размеры выплат по процентной ставке, оформлял аккредитивы, 
        переводы, расчетные чеки, продажу и покупку ценных бумаг (сертификатов, лотерей, облигаций, 
        акций).Помогает осуществлять продажу и покупку валюты.',
    ],

    [
        'name' => 'Юрист', 
        'data' => 'Mar 2020 - Jun 2023',
        'functional' => 'составление договоров, протоколов разногласий и прочих юридических документов;
        ведение базы договоров: от регистрации до хранения;
        подготовка материалов, а также работа в арбитраже;
        консультация руководства организации;
        информирование сотрудников об изменениях в законодательстве, которые имеют прямое отношение либо
        к компании, либо к обязанностям ее специалистов.',
    ],

    [
        'name' => 'Дизайнер', 
        'data' => 'Lun 2017 - Feb 2020',
        'functional' => 'Контроль качества внедряемых дизайнерских разработок, разработка дизайнерских проектов в 
        соответствии с заданными критериями, контроль за производством опытных образцов Ведение делового 
        документооборота в своей сфере ответственности, участие в экспертизе сторонних моделей и расчетов, 
        относящихся к дизайну
        участие в подборке материалов для разрабатываемых проектов',
    ],
]
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
    </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">
    
        <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.
            webp" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>
            <?php echo $my_name;?>
            </h2>
            </div>
        </div>
        <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city_country;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $e_mail;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone_no;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $age_years;?> 
            лет(<?php echo $age_days;?>&nbsp;дней)</p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for($i = 0; $i < count($skills); $i++):?>
            <p><?php echo $skills[$i]['name'];?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:
            <?php echo $skills[$i]['percent'];?>%">
            <?php echo $skills[$i]['percent'];?>%</div>
            </div>
            <?php endfor;?>
            <br>

        <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
        <?php for($i = 0; $i < count($language); $i++):?>
        <p><?php echo $language[$i]['name'];?></p>
        <div class="w3-light-grey w3-round-xlarge">
        <div class="w3-round-xlarge w3-teal" style="height:24px;width:
        <?php echo $language[$i]['percent'];?>%">
        <?php echo $language[$i]['percent'];?>%</div>
        </div>
        <p>Испанский</p>
        <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
        </div> 
        <p>Немецкий</p>
        <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
        </div>
        <?php endfor;?>
        <br>
        </div>
    </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
    <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text
        -teal"></i>Опыт работы</h2>
        <div class="w3-container">
        <h5 class="w3-opacity"><b><?php for($i = 0; $i < count($work); $i++):?>
        <p><?php echo $work[$i]['name'];?></p></b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $work[$i]['data'];
        ?><span class=
        "w3-tag w3-teal w3-round"></span></h6>
        <p><?php echo $work[$i]['functional'];?></p>
        <hr>
        </div>
        <div class="w3-container">
        <?php endfor;?>
        <br>
        </div>
    </div>

    <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text
        -teal"></i>Образование</h2>
        <div class="w3-container">
        <h5 class="w3-opacity"><b>gb.ru</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
        <p>Web Development! All I need to know in one place</p>
        <hr>
        </div>
        <div class="w3-container">
        <h5 class="w3-opacity"><b>London Business School</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
        <p>Master Degree</p>
        <hr>
        </div>
        <div class="w3-container">
        <h5 class="w3-opacity"><b>School of Coding</b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
        <p>Bachelor Degree</p><br>
        </div>
    </div>

    <!-- End Right Column -->
    </div>
    
<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
<p>Find me on social media.</p>
<i class="fa fa-pinterest-p w3-hover-opacity"></i>
<i class="fa fa-twitter w3-hover-opacity"></i>
<i class="fa fa-linkedin w3-hover-opacity"></i>
<!-- End footer -->
</footer>

</body>
</html>
