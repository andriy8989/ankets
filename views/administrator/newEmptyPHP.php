<?php

//Каким-то образом получает массив - список колонок.
$cols = KF_TABLE::model()->getTable($attr['TABLE_ID']);
                $col_count = $cols->totalItemCount;
                $cols = $cols->getData();
                if ($col_count > 0) {
                    for ($i = 0; $i <= $col_count - 1; $i++) { //и формирует массив-конфиг для грида - value, header.
                        $columns[] = array('value' => 'CHtml::link($data[' . $i . '],Yii::app()->createUrl("fillingforms/AddTableData",array("ids[]"=>Chtml::encode($data[count($data)-1][2]))),array("onclick" => "editTableData(this); return false;"))."&nbsp;&nbsp;<img src=\"' . Yii::app()->getBaseUrl() . '/images/history_small.png\" onclick=\"showHistoryForTableAttr(' . $form_id . ',' . $oy_id . ',' . $cols[$i]['ATTR_ID'] . ',' . $cid . ',' . $attr['TABLE_ID'] . ',".$data[count($data)-1][1].")\"/>"', 'header' => $cols[$i]['ATTR_NAME'], 'type' => 'raw');
                    }
                    $columns[] = array( //Добавляет колонку с кнопками
                        'class' => 'CButtonColumn',
                        'template' => '{update}{delete1}',
                        //  'afterDelete' => '1',
                        'buttons' => array(
                            'delete1' => array(
                                'url' => 'Yii::app()->createUrl("fillingforms/delRowTable", array("ids[]"=>Chtml::encode($data[count($data)-1][2])))',
                                'imageUrl' => '/images/delete.png',
                                'options' => array(
                                    'onclick' => 'deleteTableItem(this); return false;',
                                    'title' => 'Удалить'
                                )
                            ),
                            'update' => array(
                                'url' => 'Yii::app()->createUrl("fillingforms/AddTableData",array("ids[]"=>Chtml::encode($data[count($data)-1][2])))',
                                'options' => array(
                                    'onclick' => 'editTableData(this); return false;  '
                                )
                            )
                        )
                    );
                }

                $grid = $this->widget('zii.widgets.grid.CGridView', array( // создаетяс виджет, к-му скармливается датапрвайдер с данными (внутри getTable() динамически строится скл запрос)
                    'dataProvider' => ORG_OBJECT::model()->getTable($oy_id, $attr['TABLE_ID'], $form_id, $cid),
                    'summaryText' => 'Всего элементов: {count}',
                    'id' => 'grid_' . $attr['TABLE_ID'],
                    'pager' => array(
                        'footer' => '',
                        'header' => ''
                    ),
                    'template' => "
          <div class='table_head_p'>
$addlink
{summary}{pager}
          </div>
            \n{items}", 'columns' => $columns //выше мы собрали колонки
                       ));
          
