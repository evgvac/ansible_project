<html>
<head>
        <title>Command execution</title>
</head>
<body>
        <form method="POST" action="./exec.php" name="exec">
                Имя устройства: <input name="ipaddr" type="text" size="50" />
                <input name="submit" type="submit" value="Exec" />
        </form>
        <table border="2" width="55%" cellpadding="3">
        <tr>
            <th>Имя коммутатора</th>
            <th>Местоположение</th>
        </tr>
                <tr>
                        <td>MSKDIA-3850-48P-1-1E</td>
                        <td>БЦ Диапазон Серверная КБ первый этаж</td>
                </tr>
                <tr>
                        <td>MSKDIA-2960X-48P-1-2</td>
                        <td>БЦ Диапазон кабинеты 194-196 первый этаж ТКШ под потолком</td>
                </tr>
                <tr>
                        <td>MSKDIA-2960X-GD-FL1</td>
                        <td>БЦ Диапазон кабинет ГД</td>
                </tr>
                <tr>
                        <td>MSKDIA-3850-48P-2FLR</td>
                        <td>БЦ Диапазон локальный центр правое крыло второй этаж</td>
                </tr>
                <tr>
                        <td>MSKDIA-3850-2-1</td>
                        <td>БЦ Диапазон локальный центр 2-1 левое крыло второй этаж (ближе к пассажирским лифтам)</td>
                </tr>
                <tr>
                        <td>MSKDIA-3850-2-2</td>
                        <td>БЦ Диапазон локальный центр 2-2 левое крыло второй этаж (ближе к грузовому лифту)</td>
                </tr>
                <tr>
                        <td>MSKDIA-9200-48P-3FLR</td>
                        <td>БЦ Диапазон локальный центр правое крыло третий этаж</td>
                </tr>
                <tr>
                        <td>MSKDIA-9200-48P-4-1</td>
                        <td>БЦ Диапазон локальный центр 4-1 левое крыло четвертый этаж (ближе к пассажирским лифтам)</td>
                </tr>
                <tr>
                        <td>MSKDIA-9200-48P-4-2</td>
                        <td>БЦ Диапазон локальный центр 4-2 левое крыло четвертый этаж (ближе к грузовому лифту)</td>
                </tr>
                <tr>
                        <td>MSKDIA-3850-48T-4-1-2</td>
                        <td>БЦ Диапазон локальный центр 4-1 левое крыло четвертый этаж (ближе к пассажирским лифтам)</td>
                </tr>
                <tr>
                        <td>MSKDIA-2960L-reseption</td>
                        <td>БЦ Диапазон левое крыло четвертый этаж респшн</td>
                </tr>
                <tr>
                        <td>MSKDIA-9200-48P-5-1</td>
                        <td>БЦ Диапазон локальный центр левое крыло пятый этаж ЛЦ5-1 комната 29</td>
                </tr>
                <tr>
                        <td>MSKDIA-9200-48P-5-2</td>
                        <td>БЦ Диапазон локальный центр левое крыло пятый этаж комната ИТ руковобства</td>
                </tr>
                <tr>
                        <td>MSKDIA-3850-5-1-2</td>
                        <td>БЦ Диапазон локальный центр левое крыло пятый этаж ЛЦ5-1 комната 29</td>
                </tr>
                <tr>
                        <td>SPB-BP-3850-STACK-2</td>
                        <td>СПБ кроссовая на втором этаже</td>
                </tr>
                <tr>
                        <td>SPB-BP-2960-5FL</td>
                        <td>СПБ кроссовая на пятом этаже</td>
                </tr>
                <tr>
                        <td>SPB-BP-3850-STACK-6</td>
                        <td>ПБ кроссовая на шестом этаже</td>
                </tr>
                <tr>
                        <td>SPB-BP-2960-1FL</td>
                        <td>СПБ кроссовая на первом этаже</td>
                </tr>
                <tr>
                        <td>VOITN-3850-48T-2FL</td>
                        <td>СПБ коммутатор на втором этаже у бухгалтерии и ИБ</td>
                </tr>
                <tr>
                        <td>SPB-BP-3850-3FL</td>
                        <td>СПБ кроссовая на третьем этаже</td>
                </tr>
                <tr>
                        <td>MV128-C3850-CORE</td>
                        <td>Вишневая 7/128, второй этаж Лестница</td>
                </tr>
                <tr>
                        <td>MV128-2960X-48</td>
                        <td>Вишневая 7/128, Цех</td>
                </tr>
                <tr>
                        <td>MV128-C3750G-48PS</td>
                        <td>Вишневая 7/128, Цех, Зона покраски</td>
                </tr>
                <tr>
                        <td>MV20-C2960X-48P-A1</td>
                        <td>Вишневая 7/20, серверная корпус A</td>
                </tr>
                <tr>
                        <td>MV20-3850-48T-V</td>
                        <td>Вишневая 7/20, Склад корпус V</td>
                </tr>
                <tr>
                        <td>MV20-C2960X-48B2</td>
                        <td>Вишневая 7/20, Цех корпус B</td>
                </tr>
                <tr>
                        <td>MV20-9200-48P-G3</td>
                        <td>Вишневая 7/20, АБК, корпус G третий этаж</td>
                </tr>
                <tr>
                        <td>MV20-C3850-48T-G2</td>
                        <td>Вишневая 7/20, АБК, корпус G второй этаж</td>
                </tr>
                <tr>
                        <td>MV20-C3850-STACK-B</td>
                        <td>Вишневая 7/20, АБК корпус B второй этаж</td>
                </tr>
                <tr>
                        <td>MV20-C3850-STACK-A</td>
                        <td>Вишневая 7/20, серверная корпус А</td>
                </tr>
                <tr>
                        <td>MV20-C3850-STACK-OTK</td>
                        <td>Вишневая 7/20, АБК корпус А, военная приемка</td>
                </tr>
                <tr>
                        <td>MV11-C3850-48T-FL1</td>
                        <td>Вишневая 7/11, первый этаж</td>
                </tr>
                <tr>
                        <td>MV21-C9200-48P-FL4</td>
                        <td>Вишневая 7/21, четвертый этаж навесной ТКШ</td>
                </tr>
                <tr>
                        <td>MV21-9200-48P-FL1</td>
                        <td>Вишневая 7/21, первый этаж локальный центр</td>
                </tr>
                <tr>
                        <td>MV21-9200-48P-FL1-2</td>
                        <td>Вишневая 7/21, первый этаж локальный центр</td>
                </tr>
                <tr>
                        <td>MV21-9200-48P-FL1-3</td>
                        <td>Вишневая 7/21, первый этаж локальный центр</td>
                </tr>
                <tr>
                        <td>MV25-C2960-48P</td>
                        <td>Вишневая 7/25, первый этаж локальный центр</td>
                </tr>
                <tr>
                        <td>ZELITN-c3850</td>
                        <td>Зеленоград</td>
                </tr>
                <tr>
                        <td>RYBITN-C3850</td>
                        <td>Рыбинск</td>
                </tr>
                <tr>
                        <td>RYBITN-2960L-Prod-Ceh</td>
                        <td>Рыбинск</td>
                </tr>
                <tr>
                        <td>RYBITN-C2960-34</td>
                        <td>Рыбинск</td>
                </tr>
                <tr>
                        <td>RLITN-C2960X-CORE</td>
                        <td>Рязань, КДП, АТО</td>
                </tr>
                <tr>
                        <td>RLITN-2960X-ANGAR</td>
                        <td>Рязань, Старые Ангары</td>
                </tr>
                <tr>
                        <td>RLITN-2960X-KDP2</td>
                        <td>Рязань, КДП, АТО</td>
                </tr>
                <tr>
                        <td>RLITN-2960X-KDP3</td>
                        <td>Рязань, КДП, Пилоты</td>
                </tr>
                <tr>
                        <td>RLITN-2960X-TECH</td>
                        <td>Рязань, ТЭЧ второй этаж</td>
                </tr>
                <tr>
                        <td>RLITN-2960X-TECH2</td>
                        <td>Рязань, ТЭЧ второй этаж</td>
                </tr>
                <tr>
                        <td>DMZN-C9200-STACK-CSO</td>
                        <td>Серийный завод ЦСО</td>
                </tr>
                <tr>
                        <td>DMZN-C9200-48P-LC13</td>
                        <td>Серийный завод ЛЦ13</td>
                </tr>
                <tr>
                        <td>DMZN-C9200-48P-LC15</td>
                        <td>Серийный завод ЛЦ15</td>
                </tr>
                <tr>
                        <td>DMZN-C9200-STACK-LC31</td>
                        <td>Серийный завод ЛЦ31</td>
                </tr>
                <tr>
                        <td>DMZN-C9200-STACK-LC32</td>
                        <td>Серийный завод ЛЦ32</td>
                </tr>
                <tr>
                        <td>DMZN-C3560CX-12P-LC11</td>
                        <td>Серийный завод ЛЦ11</td>
                </tr>
                <tr>
                        <td>DMZN-C3560CX-12P-LC14</td>
                        <td>Серийный завод ЛЦ14</td>
                </tr>
                <tr>
                        <td>FEAK-C9200-48P-CORE</td>
                        <td>Феодосия Аэродром Модульный городок ЦСО</td>
                </tr>
                <tr>
                        <td>FEGK-9200-48P-1</td>
                        <td>Феодосия Династия ЦС</td>
                </tr>
        </table>
</body>
</html>
