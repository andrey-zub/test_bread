<?

$this->title = 'manager panel';
$this->params['breadcrumbs'][] = array(
    'label'=> 'manager panel',
    'url'=>Yii::$app->urlManager->createUrl(['manager/'])
);
$this->params['breadcrumbs'][] = array(
    'label'=> 'Product menu',
    'url'=>Yii::$app->urlManager->createUrl(['page/product'])
);
$this->params['breadcrumbs'][] = array(
    'label'=> 'Manager menu',
    'url'=>Yii::$app->urlManager->createUrl(['manager/'])
);


?>


<div class="manager-default-index">
 <h3>Модуль менеджера</h3>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Сотрудники</h2>

                <p>Страница для работы с таблицей [ Сотрудники  ]</p>

                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(['manager/employee'])?>">Перейти</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Товары</h2>

                <p>Страница для работы с таблицей [ Товар  ]</p>

                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(['manager/product'])?>">Перейти</a></p>
            </div>


        </div>

        <div class="row">
          <div class="col-lg-12">
                <h3>-----------------------------------------------------------------------------------------------------------------------------------------</h3>
           </div>
         </div>


        <div class="row">
            <div class="col-lg-6">
                <h2>Заказчики</h2>

                <p>Страница для работы с таблицей [ Заказчики  ]</p>

                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(['manager/owner'])?>">Перейти</a></p>
            </div>
            <div class="col-lg-6">
                <h2>Информация по заказам</h2>

                <p>Страница для работы с таблицей [ Информация по заказам  ]</p>

                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(['manager/order-info'])?>">Перейти</a></p>
            </div>


        </div>

                <div class="row">
                  <div class="col-lg-12">
                        <h3>-----------------------------------------------------------------------------------------------------------------------------------------</h3>
                   </div>
                 </div>

        <div class="row">

            <div class="col-lg-4">   </div>

            <div class="col-lg-8">
                <h2>Отчетность по закрытым заказам</h2>

                <p>Страница для работы с таблицей [ Отчетность по закрытым заказам  ]</p>

                <p><a class="btn btn-default" href="<?=Yii::$app->urlManager->createUrl(['manager/report'])?>">Перейти</a></p>
            </div>




        </div>

</div>

</div>
