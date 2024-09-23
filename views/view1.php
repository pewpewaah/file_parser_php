<html>
    <head>
        this is delicioso
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Symbol</th>
                    <th>Open</th>
                    <th>High</th>
                    <th>Low</th>
                    <th>Close</th>
                    <th>Volume</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($ticker)):?>
                    <?php foreach($ticks as $tick):?>
                        <tr>
                            <td><?= $tick['time']?></td>
                            <td><?= $tick['sym']?></td>
                            <td><?= $tick['open']?></td>
                            <td><?= $tick['high']?></td>
                            <td><?= $tick['low']?></td>
                            <td><?= $tick['close']?></td>
                            <td><?= $tick['vol']?></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </body>
</html>