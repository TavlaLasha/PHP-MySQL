<table cellspacing=0>
        <tr>
            <td>Saxeli - </td>
            <td>
                <?=
                    $_GET['username'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Gvari - </td>
            <td>
            <?=
                    $_GET['userlast'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Tanamdeboba - </td>
            <td>
            <?=
                    $_GET['userjob'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Xelfasi - </td>
            <td>
            <?=
                    $_GET['salary'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Sashemosavlo - </td>
            <td>
            <?=
                    $_GET['salary']*0.2;
                ?>
            </td>
        </tr>
        <tr>
            <td>Daricxuli xelpasi - </td>
            <td>
            <?=
                    $_GET['salary'] - $_GET['salary']*0.2;
                ?>
            </td>
        </tr>
</table>