<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<?php
function datetostring($date)
{
    $d = explode("-", $date);
    return $d['2'] . '.' . $d['1'] . '.' . $d['0'];
}

function f_d($var)
{
    if (($var == 0) or ($var == NULL)) return "0.00"; else
        return sprintf("%22.2f", $var);
}

function f_d3($var)
{
    if (($var == 0) or ($var == NULL)) return "0.000"; else
        return sprintf("%22.3f", $var);
}

?>
<body>
<table border=0 width=100%>
    <tr>

        <table width=100% border=0>
            <tr>
                <td width='500'></td>
                <td width='235px' align=center>
                    <font size='2'><i>Приложение 50<br>
                            к приказу Министра финансов Республики Казахстан<br>
                            от 20 декабря 2012 года № 562 </i></font>
                    <p align=right>
                        Форма Р-1
                    </p>
                </td>
            </tr>
        </table>

    </tr>
    <tr>
        <td>
            <table width=100% border=1px cellspacing=0 cellpadding=0><font size='2'>
                    <tr>
                        <td width='2100px'>

                            <table width=100%>
                                <tr>
                                    <td width='588px'>
                                    </td>
                                    <td width='147px'>
                                        <p align=center>ИИН/БИН</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='2100px'>
                                        <p> Заказчик <b>
                                                <?php
                                                echo " " . "{$firm->name}" . " " . $firm->address;
                                                ?>
                                            </b></p>
                                    </td>
                                    <td width='147px'>
                                        <table width='147px' border=1 cellspacing=0 cellpadding=0>
                                            <tr>
                                                <td width='147px'>
                                                    <p>
                                                        <?php
                                                        echo $firm->bin;
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='588px'>
                                        <p align=center><sup>полное наименование, адрес, данные о средствах связи</sup>
                                        </p>
                                    </td>
                                    <td width='147px'>
                                        <p>&nbsp </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='2100px'>
                                        <p>Исполнитель<b>
                                                <?php
                                                echo $org->org_name . " " . $org->address;
                                                ?>
                                            </b></p>
                                    </td>
                                    <td width='147px'>
                                        <table width='147px' border=1 cellspacing=0 cellpadding=0>
                                            <tr>
                                                <td width='147px'>
                                                    <p>
                                                        <?php
                                                        echo $org->bin;
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='588px'>
                                        <p align=center><sup>полное наименование, адрес, данные о средствах связи</sup>
                                        </p>
                                    </td>
                                    <td width='147px'>
                                    </td>
                                </tr>
                                <tr>
                                    <td width='588px'>
                                        <p align=center>Договор (контракт) №
                                            <?php
                                            echo " " . $firm->dogovor . " " . datetostring($firm->dogovor_date);
                                            ?>
                                        </p>
                                    </td>
                                    <td width='147px'>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>


            <table width='200px' border=1px cellspacing=0 cellpadding=0 align=right>
                <tr>
                    <td width='118px' rowspan=2>
                        <p align=center>Номер документа</p>
                    </td>
                    <td width='82px' rowspan=2>
                        <p align=center>Дата составления</p>
                    </td>

                </tr>
                <tr>

                </tr>
                <tr>
                    <td width='118px'>
                        <p align=center>
                            <?php
                            echo $schetfactura_date->id;
                            ?>
                        </p>
                    </td>
                    <td width='82px'>
                        <p align=center>
                            <?php
                            if (strlen($data_schet) == 0) {
                                echo datetostring($schetfactura_date->date);
                            } else {
                                echo $data_schet;
                            }
                            ?>
                        </p>
                    </td>


                </tr>
                <tr></tr>
            </table>


        </td>
    </tr>
    <tr>
        <td align="center">
            </br></br></br>

            <p align='right'><h4>АКТ ВЫПОЛНЕННЫХ РАБОТ (ОКАЗАННЫХ УСЛУГ)*
            <p></h4>


        </td>
    </tr>
    <tr>
        <td>

            <table width=100% border=1px cellspacing=0 cellpadding='2px'>
                <tr>
                    <th rowspan=2 width='60px'>
                        <font size='2'>Номер по порядку</font>
                    </th>
                    <th rowspan=2 width='145px'>
                        <font size='2'>Наименование работ (услуг) (в разрезе их подвидов в соответствии с
                            техспецификацией, заданием, графиком выполнения работ (услуг) при их наличии

                    </th>
                    <th rowspan=2 width='80px'>
                        <font size='2'>Дата выполнения работ (оказания услуг) **
                    </th>
                    <th rowspan=2 width='120px'>
                        <font size='2'>Сведения о наличии отчет о маркетинговых исследованиях, консультационных и прочих
                            услуг (дата, номер, количество страниц)
                    </th>
                    <th rowspan=2 width='82px'>
                        <font size='2'>Единица измерения
                    </th>
                    <th colspan=3 width='331px'>
                        <font size='2'>Выполнено работ (оказано услуг)
                    </th>
                </tr>
                <tr>
                    <th width='92px'>
                        <font size='2'>количество
                    </th>
                    <th width='92px'>
                        <font size='2'>цена за единицу
                    </th>
                    <th width='147px'>
                        <font size='2'>стоимость
                    </th>
                </tr>
                <tr>
                    <td width='60px' align=center>
                        <font size='2'>1
                    </td>
                    <td width='145px' align=center>
                        <font size='2'>2
                    </td>
                    <td width='80px' align=center>
                        <font size='2'>3
                    </td>
                    <td width='120px' align=center>
                        <font size='2'>4
                    </td>
                    <td width='82px' align=center>
                        <font size='2'>5
                    </td>
                    <td width='92px' align=center>
                        <font size='2'>6
                    </td>
                    <td width='92px' align=center>
                        <font size='2'>7
                    </td>
                    <td width='147px' align=center>
                        <font size='2'>8
                    </td>
                </tr>

                <?php
                $sum_bez_nds = 0;
                $sum_nds = 0;
                $sum = 0;
                $i = 1;

                $i_t = $itog->itog_tenge;
                $i_nds = $itog->itogo_nds;
                $i_itogo = $itog->itogo_with_nds;

                foreach ($s as $s2):
                    ?>

                    <tr>
                        <td width='60px' align=center>
                            <font size='2'><p>
                                    <?php
                                    echo $i++;
                                    ?>
                                </p>
                        </td>
                        <td width='145px' align=center>
                            <font size='2'><p>Электроэнергия</p>
                        </td>
                        <td width='80px' align=center>
                            <font size='2'><?php if ($i == 3) {
                                    echo datetostring($period->begin_date) . " - " . datetostring($period->end_date);
                                } else echo "";
                                ?>
                        </td>
                        <td width='120px' align=center>
                            <font size='2'><p>Нет</p>
                        </td>
                        <td width='82px' align=center>
                            <font size='2'><p>кВт*ч</p>
                        </td>
                        <td width='92px' align=center>
                            <font size='2'><p>
                                    <?php
                                    echo f_d($s2->kvt);
                                    ?>
                                </p>
                        </td>
                        <td width='92px' align=center>
                            <font size='2'><p>
                                    <?php
                                    echo f_d3($s2->tariff_value);
                                    ?>
                                </p>
                        </td>
                        <td width='147px' align=center>
                            <font size='2'><p>
                                    <?php
                                    if ($i_t - $s2->tenge > 1) {
                                        echo f_d($s2->tenge);
                                        $sum_bez_nds += $s2->tenge;
                                        $i_t -= f_d($s2->tenge);
                                    } else echo $i_t;
                                    ?>
                                </p>
                        </td>
                    </tr>

                <?php
                endforeach;
                ?>

                <tr>
                    <th width='60px'>
                        <p>&nbsp </p>
                    </th>
                    <th width='145px'>
                        <p>&nbsp </p>
                    </th>
                    <th width='80px'>
                        <p>&nbsp </p>
                    </th>
                    <th width='120px'>
                        <p>&nbsp </p>
                    </th>
                    <th width='82px'>
                        <font size='2'><p>Итого</p>
                    </th>
                    <th width='92px'>
                        <p>&nbsp </p>
                    </th>
                    <th width='92px'>
                        <font size='2'><p>x</p>
                    </th>
                    <th width='147px'>
                        <font size='2'><p>
                                <?php
                                echo f_d($itog->itog_tenge);
                                ?>
                            </p>
                    </th>
                </tr>
                <tr>

                    <th width='588px' colspan=7>
                        <font size='2'><p align=center>В том числе НДС</p>
                    </th>
                    <th width='147px'>
                        <font size='2'><p>
                                <?php
                                echo f_d($itog->itogo_with_nds);
                                ?>
                            </p>
                    </th>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>

            <table width=100% border=0px cellspacing=0 cellpadding=0>
                <tr>
                    <td width='800px'>
                        <font size='2'><p>Сведения об использовании запасов, полученных от заказчика</p>
                    </td>
                    <td width='1000px'>
                        <p>_______________________________________________________</p>
                    </td>
                </tr>
                <tr>
                    <td width='800px'>
                    </td>
                    <td width='1000px'>
                        <p><sup>наименование, количество, стоимость</sup></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td>

            <table width=100% border=0px cellspacing=0 cellpadding=0>
                <tr>
                    <td width='1900px'>
                        <font size='2'><p>Перечень документации, в том числе отчет(ы) о маркетинговых, научных
                                исследованиях, консультационных и прочих услугах (обязательны при его (их) наличии) на
                                ______________________ страниц</p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td>

            <table width=100% border=0px cellspacing=0 cellpadding=0>
                <tr>
                    <td width='480px'>
                        <table width='480px' border=1px cellspacing=0 cellpadding=0>
                            <tr>
                                <td width='480px'>
                                    <table width='480px' border=0px cellspacing=0 cellpadding='5px'>
                                        <tr>
                                            <td width='480px' colspan=3>
                                                <p>
                                                    Сдал (Исполнитель)
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='130px' align=center>
                                                <p>______________ /</p>
                                            </td>
                                            <td width='130px' align=center>
                                                <p>______________ /</p>
                                            </td>
                                            <td width='220px' align=center>
                                                <p>___________________</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='130px' align=center>
                                                <p align=center><sup>должность</sup></p>
                                            </td>
                                            <td width='130px' align=center>
                                                <p align=center><sup>подпись</sup></p>
                                            </td>
                                            <td width='220px' align=center>
                                                <p align=center><sup>расшифровка подписи</sup></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <p align=center>М.П.</p>
                    </td>
                    <td width='103px'>
                    </td>
                    <td width='480px'>
                        <table width='480px' border=1px cellspacing=0 cellpadding=0>
                            <tr>
                                <td width='480px'>
                                    <table width='480px' border=0px cellspacing=0 cellpadding='5px'>
                                        <tr>
                                            <td width='480px' colspan=3>
                                                <p>
                                                    Принял (Заказчик)
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='130px' align=center>
                                                <p>______________ /</p>
                                            </td>
                                            <td width='130px' align=center>
                                                <p>______________ /</p>
                                            </td>
                                            <td width='220px' align=center>
                                                <p>___________________</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width='130px' align=center>
                                                <p align=center><sup>должность</sup></p>
                                            </td>
                                            <td width='130px' align=center>
                                                <p align=center><sup>подпись</sup></p>
                                            </td>
                                            <td width='220px' align=center>
                                                <p align=center><sup>расшифровка подписи</sup></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <p align=center>М.П.</p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td></font>

            <font size='2'><b>*Применяется для приемки-передачи выполненных работ (оказанных услуг), за исключением
                    строительно-монтажных работ.<br>
                    <b>**Заполняется в случае, если даты выполненных работ (оказанных услуг) приходятся на различные
                        периоды, а также в случае, если даты выполнения работ (оказания услуг) и даты подписания
                        (принятия) работ (услуг) различны.<br>
                        ***Заполняется в случае наличия отчета о научных исследованиях, маркетинговых, консультационных
                        и прочих услугах.</font>


        </td>
    </tr>
</table>
</body>
</html>