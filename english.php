<?php
//Две строчки ниже для защиты форм от спам-ботов
session_start();
$_SESSION['sf_key'] = md5(substr( session_id(), mt_rand(0,10), mt_rand(3,10) ) . time() );

header('Content-Type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
include 'functions.php';

$title = 'MYPROJECTOFFICE';
$desc = 'Управление международными проектами';
$url = SI_CurrentPageURL();
$image = SI_CurrentPageImage();


?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" class="loading">


<head>

    <!-- Meta information (content-type + mobile mod) -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <meta name="cmsmagazine" content="2f345f737ed0d95e9259d18f5edc8cd7">
    <meta name="tagline" content="http://hello-brand.ru/">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon -->
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">


    <!-- CSS styles -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css" media="screen">
<!--    <link rel="stylesheet" href="css/swiper.min.css" type="text/css" media="screen">-->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">


    <!-- OGP -->
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:description" content="<?php echo $desc; ?>"/>
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">


    <!-- Page title -->
    <title><?php echo $title; ?> | <?php echo $desc; ?></title>


</head>


<body id="main">
<div id="global-wrapper">

    <!--===================================================== Header -->
    <header class="layout-header">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-7-12 col-xs-1-3">
                    <a href="#" class="logo si-jump">
                        <img src="images/logo.png" alt=" ">
                    </a>

                    <div class="nav">
                        <ul class="wrapper">
                            <li><a class="si-jump" href="#task">
                                    Какие задачи мы решаем
                                </a></li>
                            <li><a class="si-jump" href="#process">
                                    Как мы работаем
                                </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Phone block -->
                <div class="col-5-12 col-xs-2-3 position">
                    <div class="lang-block">
                        <div class="close"></div>
                        <p class="text">
                            Choose language
                            <span>(Выберите язык)</span>
                        </p>
                        <a href="index.php" class="btn btn-blue">Russian</a>
                        <a href="english.php" class="btn btn-blue">English</a>
                    </div>
                    <select name="lang" class="lang" onchange="window.location.href=this.options[this.selectedIndex].value">
                        <option value="http://evgenivo.beget.tech/english.php">english</option>
                        <option value="http://evgenivo.beget.tech/index.php">russian</option>
                    </select>
                    <div class="si-phone align-right">
                        <a href="tel:+78001233232" class="phone-link"><span>8 800</span> 123 - 32 - 32</a>
                        <a href="#" class="open-phone-modal consult" data-extra="1">Задать вопрос</a>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!--===================================================== section heading -->
    <section class="section-heading" id="heading">
        <div class="container">

            <div class="small-title cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                 data-offset="90%" data-easing="easeOutQuint">
                Управление международными проектами
            </div>

            <h1 class="cre-animate"
                data-animation="slide-in-from-left" data-speed="1500" data-delay="600"
                data-offset="90%" data-easing="easeOutQuint">
                English version
            </h1>

            <div class="sub-title cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="900"
                 data-offset="90%" data-easing="easeOutQuint">
                Ответственно. Конфиденциально. С измеримым результатом.
            </div>

            <div class="last-wrapper cre-animate"
                 data-animation="slide-in-from-left" data-speed="1500" data-delay="1200"
                 data-offset="90%" data-easing="easeOutQuint">
                <div class="last-block">
                    <div class="title">
                        15
                    </div>
                    <span>лет</span>
                    <div class="text">
                        опыта
                    </div>
                </div>
                <div class="last-block">
                    <div class="title">
                        200
                    </div>

                    <span>проектов</span>
                    <div  class="text">
                        выполнено
                    </div>
                </div>
            </div>
        </div>

        <div class="big-container">
            <div class="department-wrapper">
                <a href="#" class="more-block open-phone-modal cre-animate"
                   data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                   data-offset="90%" data-easing="easeOutQuint">
                <span class="more-text">
                    Узнать  <br> больше
                </span>
                </a>

                <div class="title">
                    Что такое проектное  управление?
                </div>
                <div class="text">

                    Основная цель системы управления проектами - это создание измеримой системы для достижения заранеее определённого результата в любой задаче вне зависимости от масштаба без выхода за рамки установленного времени и бюджета.
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section practice -->
    <section class="section-practice" id="practice">
        <div class="container">
            <div class="block-title cre-animate"
                 data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                 data-offset="90%" data-easing="easeOutQuint">
                <h1>
                    Практики, а не  консультанты
                </h1>

                <div class="sub_h1">
                    <div class="icon"><span>!</span></div>
                    <div class="text">
                        <span>Наша цель:</span> выполнение финансовых показателей проекта и сроков в утверждённых рамках и качестве.
                    </div>
                </div>
            </div>

            <div class="block-text cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="500"
                 data-offset="90%" data-easing="easeOutQuint">
                Ведение проектов на международном рынке характеризуется наличием малоизвестных и плохо предсказуемых рисков, несвойственных для внутрироссийских или постсоветских территорий. Главная ценность предоставляемой услуги, заключается в том, что наша команда с многолетним опытом может более эффективно идентифицировать потенциальные риски, а также выполнить проект оптимальным способом с учетом имеющейся практики.
            </div>
            <div class="hidden-xs">
                <div class="row">
                    <div class="col-1-3">
                        <div class="practice-block cre-animate"
                             data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                             data-offset="90%" data-easing="easeOutQuint">
                            <div class="practice-icon i-1">
                                <?php include('svg/show.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Обеспечиваем <br>прозрачность процесса
                            </div>
                            <div class="practice-text">
                                Своевременно предоставляем отчеты о ходе выполнения проекта в установленном формат.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="practice-block center cre-animate"
                             data-animation="slide-in-from-right" data-speed="1500" data-delay="600"
                             data-offset="90%" data-easing="easeOutQuint">
                            <div class="practice-icon i-2">
                                <?php include('svg/frame.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Контролируем сроки,<br> бюджет и качество
                            </div>
                            <div class="practice-text">
                                Достигаем цели проекта в заданные сроки, в рамках утвержденного бюджета и требуемого качества.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="practice-block right cre-animate"
                             data-animation="slide-in-from-right" data-speed="1500" data-delay="900"
                             data-offset="90%" data-easing="easeOutQuint">
                            <div class="practice-icon i-3">
                                <?php include('svg/vector.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Идентифицируем и <br> управляем рисками
                            </div>
                            <div class="practice-text">
                                Анализируем проект на наличие потенциальных рисков, планируем мероприятия по уменьшению их влияния.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-3">
                        <div class="practice-block cre-animate"
                             data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                             data-offset="90%" data-easing="easeOutQuint">
                            <div class="practice-icon i-4">
                                <?php include('svg/profile.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Управляем <br> коммуникациями
                            </div>
                            <div class="practice-text">
                                Формализуем процесс общения с заказчиком, готовим и согласуем планы коммуникаций и эскалации.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="practice-block cre-animate"
                             data-animation="slide-in-from-left" data-speed="1500" data-delay="600"
                             data-offset="90%" data-easing="easeOutQuint">
                            <div class="practice-icon i-5"></div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Подбираем локальных<br> партнеров
                            </div>
                            <div class="practice-text">
                                Помогаем подобрать локальных подрядчиков и поставщиков, имеем проверенных партнеров в нескольких регионах.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="practice-block cre-animate"
                             data-animation="slide-in-from-left" data-speed="1500" data-delay="900"
                             data-offset="90%" data-easing="easeOutQuint">
                            <div class="practice-icon i-6">
                                <?php include('svg/page2.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Гарантируем<br> конфиденциальность
                            </div>
                            <div class="practice-text">
                                Подписываем NDA: данные о наших клиентах и их проектах никогда не передаются третьим сторонам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="visible-xs">
                <div class="row">
                    <div class="col-1-2">
                        <div class="practice-block">
                            <div class="practice-icon i-1">
                                <?php include('svg/show.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Обеспечиваем <br>прозрачность процесса
                            </div>
                            <div class="practice-text">
                                Своевременно предоставляем отчеты о ходе выполнения проекта в установленном формат.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="practice-block center">
                            <div class="practice-icon i-2">
                                <?php include('svg/frame.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Контролируем сроки,<br> бюджет и качество
                            </div>
                            <div class="practice-text">
                                Достигаем цели проекта в заданные сроки, в рамках утвержденного бюджета и требуемого качества.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-2">
                        <div class="practice-block right">
                            <div class="practice-icon i-3">
                                <?php include('svg/vector.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Идентифицируем и <br> управляем рисками
                            </div>
                            <div class="practice-text">
                                Анализируем проект на наличие потенциальных рисков, планируем мероприятия по уменьшению их влияния.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="practice-block">
                            <div class="practice-icon i-4">
                                <?php include('svg/profile.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Управляем <br> коммуникациями
                            </div>
                            <div class="practice-text">
                                Формализуем процесс общения с заказчиком, готовим и согласуем планы коммуникаций и эскалации.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-2">
                        <div class="practice-block">
                            <div class="practice-icon i-5"></div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Подбираем локальных<br> партнеров
                            </div>
                            <div class="practice-text">
                                Помогаем подобрать локальных подрядчиков и поставщиков, имеем проверенных партнеров в нескольких регионах.
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="practice-block">
                            <div class="practice-icon i-6">
                                <?php include('svg/page2.svg'); ?>
                            </div>
                            <div class="practice-line"></div>
                            <div class="practice-title">
                                Гарантируем<br> конфиденциальность
                            </div>
                            <div class="practice-text">
                                Подписываем NDA: данные о наших клиентах и их проектах никогда не передаются третьим сторонам.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section x -->
    <section class="section-task" id="task">
        <div class="container">
            <h2 class="cre-animate"
                data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                data-offset="90%" data-easing="easeOutQuint">
                Какие задачи мы решаем
            </h2>
            <div class="sub_title cre-animate"
                 data-animation="slide-in-from-left" data-speed="1500" data-delay="500"
                 data-offset="90%" data-easing="easeOutQuint">
                Методология ведения проектов - PMI (Project Management Institute)/PMBOK с глубокой адаптацией под
                нужды вашей организации. <span>Комбинирование классических подходов с практиками SCRUM.</span>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <img src="images/task-img-1.jpg" alt=" " class="task-img">
                </div>
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="task-text">
                        <div class="task-title">
                            Участие в международных тендерах
                        </div>
                        <ul class="task-list">
                            <li>
                                предварительный расчёт стоимости решения с учётом спецификации поставки, необходимых ресурсов для реализации проекта, привлечения локальных подрядчиков, существующих рисков;
                            </li>
                            <li>
                                подбор поставщиков, получение квотаций;
                            </li>
                            <li>
                                подготовка комплекта документов для подачи.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1 visible-xs">
                    <img src="images/task-img-2.jpg" alt=" " class="task-img a-1">
                </div>
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="task-text i-1">
                        <div class="task-title">
                            Реализация и сопровождение <Br> проектов
                        </div>
                        <ul class="task-list">
                            <li>
                                проведение Critical Design Review после подписания договора с заказчиком;
                            </li>
                            <li>
                                подготовка детального технического решения;
                            </li>
                            <li>
                                закупка оборудования, логистика;
                            </li>
                            <li>
                                проведение Factory Acceptance Test;
                            </li>
                            <li>
                                инсталляционные работы;
                            </li>
                            <li>
                                проведение Site Acceptance Test;
                            </li>
                            <li>
                                проектная отчетность.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-2 col-xs-1 hidden-xs cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <img src="images/task-img-2.jpg" alt=" " class="task-img a-1">
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <img src="images/task-img-3.jpg" alt=" " class="task-img a-2">
                </div>
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="task-text i-2">
                        <div class="task-title">
                            Вывод компании на международный<br> рынок
                        </div>
                        <ul class="task-list">
                            <li>
                                консультации по подготовке необходимого минимума (отраслевые сертификаты, документация, вебсайт);
                            </li>
                            <li>
                                выход на тестовые лаборатории;

                            </li>
                            <li>
                                поиск первых партнёров.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1 visible-xs">
                    <img src="images/task-img-4.jpg" alt=" " class="task-img a-1 a-3">
                </div>
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="task-text i-1 i-3">
                        <div class="task-title">
                            Проведение выставок
                        </div>
                        <ul class="task-list">
                            <li>
                                консультации по подготовке необходимого минимума (отраслевые сертификаты, документация, вебсайт);
                            </li>
                            <li>
                                выход на тестовые лаборатории;
                            </li>
                            <li>
                                поиск первых партнёров.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-2 col-xs-1 hidden-xs cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <img src="images/task-img-4.jpg" alt=" " class="task-img a-1 a-3">
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <img src="images/task-img-5.jpg" alt=" " class="task-img a-4">
                </div>
                <div class="col-1-2 col-xs-1 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="task-text i-4">
                        <div class="task-title">
                            Использование современных<br> методов управления
                        </div>
                        <ul class="task-list">
                            <li>
                                консультации по подготовке необходимого минимума (отраслевые сертификаты, документация, вебсайт);
                            </li>
                            <li>
                                выход на тестовые лаборатории;
                            </li>
                            <li>
                                поиск первых партнёров.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section how -->
    <section class="section-how" id="how">
        <div class="container">
            <h2 class="cre-animate"
                data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                data-offset="90%" data-easing="easeOutQuint">
                Как отслеживаем<br> показатели
            </h2>
            <div class="how-wrapper cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="600"
                 data-offset="90%" data-easing="easeOutQuint">
                <div class="how-number">
                    <span>01</span>
                </div>
                <div class="how-text">
                    Фиксация плановых показателей бюджета (общий расходный бюджет по статьям, план признания выручки, план движения денежных средств) с разбиением на короткие интервалы (1-3 мес).
                </div>
            </div>
            <div class="how-wrapper cre-animate"
                 data-animation="slide-in-from-left" data-speed="1500" data-delay="900"
                 data-offset="90%" data-easing="easeOutQuint">
                <div class="how-number">
                    <span>02</span>
                </div>
                <div class="how-text">
                    Отчётность относительно достижения результатов по интервалу и целому бюджету. По необходимости- внесение согласованных корректировок в следующие интервалы.
                </div>
            </div>
            <div class="how-wrapper i-3 cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="1200"
                 data-offset="90%" data-easing="easeOutQuint">
                <div class="how-number">
                    <span>03</span>
                </div>
                <div class="how-text">
                    Фиксация мастер-плана и контрольных точек. Контроль прохождения точек, корректировка плана по необходимости.
                </div>
            </div>
            <div class="how-wrapper i-4 cre-animate"
                 data-animation="slide-in-from-left" data-speed="1500" data-delay="1500"
                 data-offset="90%" data-easing="easeOutQuint">
                <div class="how-number">
                    <span>04</span>
                </div>
                <div class="how-text">
                    Регулярная ревизия плана управления рисками, комментарии и фокус на критических рисках в каждый отчетный период.
                </div>
            </div>
            <div class="how-wrapper i-1 cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="1800"
                 data-offset="90%" data-easing="easeOutQuint">
                <div class="how-number">
                    <span>05</span>
                </div>
                <div class="how-text">
                    Контроль качества реализуемого решения в рамках спецификации, анализ обратной связи от заказчика.
                </div>
            </div>
        </div>
    </section>


    <!--===================================================== section process -->
    <section class="section-process" id="process">
        <div class="container">
            <h2 class="cre-animate"
                data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                data-offset="90%" data-easing="easeOutQuint">
                Процесс работы <br> над проектами
            </h2>

<!--            <img src="images/process-img.png" alt=" " class="img-process hidden-xs">-->
            <img src="images/process-mobile-img.png" alt=" " class="img-process visible-xs">

            <div class="img-process hidden-xs">
                <div class="wrapper">
                    <div class="circle-grey"></div>
                    <div class="circle-blue" id="circle-big-1">
                        <div class="circle-white" id="circle-small-1"></div>
                    </div>
                </div>
                <div class="between-block">
                    <div class="cube-grey"></div>
                    <div class="cube-circle i-1 cube-circle-1"></div>
                    <div class="cube-circle i-2 cube-circle-2"></div>
                    <div class="cube-circle i-3 cube-circle-3"></div>
                </div>
                <div class="wrapper i-1">
                    <div class="circle-grey"></div>
                    <div class="circle-blue" id="circle-big-2">
                        <div class="circle-white" id="circle-small-2"></div>
                    </div>
                </div>
                <div class="between-block">
                    <div class="cube-grey"></div>
                    <div class="cube-circle i-1 cube-circle-4"></div>
                    <div class="cube-circle i-2 cube-circle-5"></div>
                    <div class="cube-circle i-3 cube-circle-6"></div>
                </div>
                <div class="wrapper i-2">
                    <div class="circle-grey"></div>
                    <div class="circle-blue" id="circle-big-3">
                        <div class="circle-white" id="circle-small-3"></div>
                    </div>
                </div>
                <div class="between-block">
                    <div class="cube-grey"></div>
                    <div class="cube-circle i-1 cube-circle-7"></div>
                    <div class="cube-circle i-2 cube-circle-8"></div>
                    <div class="cube-circle i-3 cube-circle-9"></div>
                </div>
                <div class="wrapper i-3">
                    <div class="circle-grey"></div>
                    <div class="circle-blue" id="circle-big-4">
                        <div class="circle-white" id="circle-small-4"></div>
                    </div>
                </div>
                <div class="between-block">
                    <div class="cube-grey"></div>
                    <div class="cube-circle i-1 cube-circle-10"></div>
                    <div class="cube-circle i-2 cube-circle-11"></div>
                    <div class="cube-circle i-3 cube-circle-12"></div>
                </div>
                <div class="wrapper i-4">
                    <div class="circle-grey"></div>
                    <div class="circle-blue" id="circle-big-5">
                        <div class="circle-white" id="circle-small-5"></div>
                    </div>
                </div>
                <div class="between-block">
                    <div class="cube-grey"></div>
                    <div class="cube-circle i-1 cube-circle-13"></div>
                    <div class="cube-circle i-2 cube-circle-14"></div>
                    <div class="cube-circle i-3 cube-circle-15"></div>
                </div>
                <div class="wrapper i-5">
                    <div class="circle-grey"></div>
                    <div class="circle-blue" id="circle-big-6">
                        <div class="circle-white" id="circle-small-6"></div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-icon">
                        <?php include('svg/graphic.svg'); ?>
                    </div>
                </div>
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="300"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-block">
                        <div class="step">
                            Шаг 1
                        </div>
                        <div class="text">
                            Анализ тендерных требований.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="600"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-block left">
                        <div class="step">
                            Шаг 2
                        </div>
                        <div class="text">
                            Разработка технического решения, подбор оборудования и поставщиков, подготовка технического предложения.
                        </div>
                    </div>
                </div>
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="600"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-icon right vector">
                        <?php include('svg/vector.svg'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="900"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-icon dollar">
                        <?php include('svg/dollar.svg'); ?>
                    </div>
                </div>
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="900"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-block step-3">
                        <div class="step">
                            Шаг 3
                        </div>
                        <div class="text">
                            Подготовка Costing Budget, получение квотаций от поставщиков оборудования и услуг.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="1200"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-block step-4">
                        <div class="step">
                            Шаг 4
                        </div>
                        <div class="text">
                            Подготовка коммерческого предложения и сопроводительных документов.
                        </div>
                    </div>
                </div>
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="1200"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-icon page">
                        <?php include('svg/page.svg'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="1500"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-icon display">
                        <?php include('svg/display.svg'); ?>
                    </div>
                </div>
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="1500"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-block step-5">
                        <div class="step">
                            Шаг 5
                        </div>
                        <div class="text">
                            Поставка решения, приемо-сдаточные испытания, подготовка исполнительной документации.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-left" data-speed="1500" data-delay="1800"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-block step-6">
                        <div class="step">
                            Шаг 6
                        </div>
                        <div class="text">
                            Передача решения на поддержку, закрытие коммерческого проекта, анализ результатов.
                        </div>
                    </div>
                </div>
                <div class="col-1-2 cre-animate"
                     data-animation="slide-in-from-right" data-speed="1500" data-delay="1800"
                     data-offset="90%" data-easing="easeOutQuint">
                    <div class="process-icon show">
                        <?php include('svg/show.svg'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===================================================== section form -->
    <section class="section-form" id="form">
        <div class="container align-center">

            <h2 class="cre-animate"
                data-animation="slide-in-from-left" data-speed="1500" data-delay="300"
                data-offset="90%" data-easing="easeOutQuint">
                У вас есть для нас проект?
            </h2>

            <div class="sub_title cre-animate"
                 data-animation="slide-in-from-right" data-speed="1500" data-delay="600"
                 data-offset="90%" data-easing="easeOutQuint">
                Мы проконсультируем и ответим на любые вопросы. Ответим за 15 минут
            </div>

            <form method="post" class="send-form form-first" autocomplete="off">
                <div class="row">
                    <div class="col-1-3 col-xs-1">
                        <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                    </div>

                    <div class="col-1-3 col-xs-1">
                        <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                    </div>

                    <div class="col-1-3 col-xs-1">
                        <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">
                    </div>
                </div>

                <input type="hidden" name="send_type" class="send-type" value="2">
                <input type="hidden" name="send_extra" class="send-extra" value="1">
				<input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
				<?php //Поле выше для защиты формы от спам-ботов ?>

                <div class="btn-holder">
                    <button type="submit" class="btn btn-blue">Заказать консультацию <span><?php include('svg/arrow.svg'); ?></span></button>
                    <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                </div>

                <!-- Agreement -->
                <div class="form-agree align-left">
                    <label class="checkbox-label form-agree-check checked">
<!--                        <input type="checkbox" checked>-->
                        Нажимая кнопку «Заказать консультацию» я принимаю условия политики конфиденциальности.
                    </label>
                </div>
            </form>

        </div>
    </section>



    <!--===================================================== Footer -->
    <footer class="layout-footer">
        <div class="container">
            <div class="row">

                <!-- company info block -->
                <div class="col-1-2">
                    <a href="#" class="logo si-jump">
                        <img src="images/logo.png" alt=" ">
                    </a>
                    <div class="logo-text">
                        ООО «My Project Office» <br>
                        Адрес офиса: Москва, Адрес офиса<br>
                        ОГРН: 1234567890123
                    </div>
                </div>

                <!-- Phone block -->
                <div class="col-1-2">
                    <div class="si-phone align-right">
                        <a href="tel:+78001233232" class="phone-link"><span>8 800</span> 123 - 32 - 32</a>
                        <a href="#" class="open-phone-modal consult" data-extra="1">Задать вопрос</a>
                        <div class="hello">
                            Оформлено и разработано <br> <a target="_blank" class="link" href="http://hello-brand.ru/">"Hello, brand!"</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </footer>


    <!--===================================================== Modals -->
    <!-- Overlay(s) -->
    <div class="si-overlay"></div>
    <div class="si-overlay-2"></div>

    <!-- Wrappers -->
    <div class="si-modals-wrapper-2"></div>

    <div class="si-modals-wrapper">

        <!--============================================== success modal -->
        <div class="si-success-modal si-success-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="si-success-modal-title">
                    Спасибо!
                </div>

                <div class="success-time">
                    Наш менеджер свяжется с вами в течение 15 минут
                </div>

                <p class="time-text">
                    <strong>Время работы отдела продаж:</strong>
                    пн-пт с 10.00 до 20.00 (по Москве)
                </p>

            </div>
        </div>

        <!--============================================== phone modal -->
        <div class="si-modal phone-modal">
            <a href="#" class="si-close"></a>

            <div class="modal-container align-center">

                <div class="modal-form-title">
                    Закажите консультацию
                </div>

                <div class="modal-time">
                    Ответ в течение 15 минут
                </div>

                <form method="post" class="send-form form-first form-modal" autocomplete="off">
                    <div class="row">
                        <div class="col-1-2 col-xs-1">
                            <input type="text" name="client_name" class="client-name" placeholder="Ваше имя">
                        </div>

                        <div class="col-1-2 col-xs-1">
                            <input type="tel" name="client_phone" class="client-phone" placeholder="Ваш телефон">
                        </div>
                    </div>

                    <input type="email" name="client_mail" class="client-mail" placeholder="Ваш e-mail">

                    <input type="hidden" name="send_type" class="send-type" value="1">
                    <input type="hidden" name="send_extra" class="send-extra" value="1">
					<input type="hidden" name="key" value="<?php echo $_SESSION['sf_key'] ?>">
					<?php //Поле выше для защиты формы от спам-ботов ?>

                    <div class="btn-holder">
                        <button type="submit" class="btn btn-blue">Заказать консультацию <span><?php include('svg/arrow.svg'); ?></span></button>
                        <!--<div class="g-recaptcha" id="g-recaptcha"></div>-->
                    </div>

                    <!-- Agreement -->
                    <div class="form-agree align-left">
                        <label class="checkbox-label form-agree-check checked">
<!--                            <input type="checkbox" checked>-->
                            Нажимая кнопку «Заказать консультацию» я принимаю условия политики конфиденциальности.
                        </label>
                    </div>
                </form>

            </div>
        </div>

        <!--============================================== text modal 1 -->
        <div class="si-modal text-modal text-modal-1">
            <a href="#" class="si-close"></a>

            <div class="modal-container">

                <div class="modal-form-title align-center">
                    Согласие на обработку персональных данных
                </div>

                <div class="modal-text-block">
                    <p>
                        Настоящим в&nbsp;соответствии с&nbsp;Федеральным законом №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;27.07.2006 года свободно, своей волей и&nbsp;в&nbsp;своём
                        интересе выражаю своё безусловное согласие на&nbsp;обработку моих персональных данных
                        НАЗВАНИЕ КОМПАНИИ,
                        зарегистрированным в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ по&nbsp;адресу:
                        АДРЕС КОМПАНИИ
                        (далее по&nbsp;тексту&nbsp;- Оператор).
                    </p>

                    <p>
                        Персональные данные&nbsp;- любая информация, относящаяся к&nbsp;определённому
                        или&nbsp;определяемому на&nbsp;основании такой информации физическому лицу.
                    </p>

                    <p>
                        Настоящее Согласие выдано мною на&nbsp;обработку следующих персональных данных:
                    </p>

                    <ul class="marked">
                        <li>
                            Имя;
                        </li>
                        <li>
                            Телефон;
                        </li>
                        <li>
                            E-mail;
                        </li>
                        <li>
                            Комментарий.
                        </li>
                    </ul>

                    <p>
                        Согласие дано Оператору для&nbsp;совершения следующих действий с&nbsp;моими персональными
                        данными с&nbsp;использованием средств автоматизации и/или&nbsp;без&nbsp;использования таких
                        средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение),
                        использование, обезличивание, передача третьим лицам для&nbsp;указанных ниже целей,
                        а&nbsp;также осуществление любых иных действий, предусмотренных действующим
                        законодательством&nbsp;РФ, как&nbsp;неавтоматизированными, так&nbsp;и&nbsp;автоматизированными
                        способами.
                    </p>

                    <p>
                        Данное согласие даётся Оператору и&nbsp;третьему лицу(&#8209;ам)
                        ТРЕТЬИ ЛИЦА
                        для&nbsp;обработки моих персональных данных в&nbsp;следующих целях:
                    </p>

                    <ul class="marked">
                        <li>
                            предоставление мне услуг/работ;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес уведомлений, касающихся предоставляемых услуг/работ;
                        </li>
                        <li>
                            подготовка и&nbsp;направление ответов/коммерческих предложений на&nbsp;мои запросы;
                        </li>
                        <li>
                            направление в&nbsp;мой адрес информации, в&nbsp;том числе рекламной,
                            о&nbsp;мероприятиях/товарах/услугах/работах Оператора.
                        </li>
                    </ul>

                    <p>
                        Настоящее согласие действует до&nbsp;момента его&nbsp;отзыва путём направления соответствующего
                        уведомления на&nbsp;электронный адрес
                        <a href="mailto:">ЕМЕЙЛ</a>.
                        В&nbsp;случае отзыва мною согласия на&nbsp;обработку персональных данных Оператор вправе
                        продолжить обработку персональных данных без&nbsp;моего согласия при&nbsp;наличии оснований,
                        указанных в&nbsp;пунктах 2&#8209;11 части&nbsp;1 статьи&nbsp;6, части&nbsp;2 статьи&nbsp;10
                        и&nbsp;части&nbsp;2 статьи&nbsp;11 Федерального закона №152&#8209;ФЗ
                        «О&nbsp;персональных данных» от&nbsp;26.06.2006&nbsp;г.
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<script>
    var template_url = '<?php echo SI_RootURL(); ?>';
    //    var template_url = '<?php //echo SI_CurrentPageURL(); ?>//';
</script>


<!-- Inlcude jQuery framework + jQuery migrate -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<!-- IE -->
<!--[if IE]>
<script src="js/html5shiv.js"></script> <![endif]-->

<!-- JS Scripts -->
<script src="js/plugins-all.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/smooth-scroll-1.4.4.min.js"></script>

<!-- Google Recaptcha -->
<!--<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>-->
<!--<script type="text/javascript">-->
<!--    var recaptcha1,-->
<!--        recaptcha2,-->
<!--        recaptcha3;-->
<!--    var onloadCallback = function () {-->
<!--        recaptcha = grecaptcha.render('g-recaptcha', {-->
<!--            'sitekey': ''-->
<!--        });-->
<!--    };-->
<!--</script>-->

<!-- custom scripts -->
<script src="js/main.js"></script>

<?php include('si-engine.php'); ?>

<!--

Digital-agency "Hello, brand!" - http://hello-brand.ru/
Дата создания: 16.03.2016
Версия: 1.0

-->


</body>
</html>