<?php

class printAfterReg{
    public static function fetchAndPrint($email){
            include_once 'connect.php';
            // return print($email);

            $database = new connect();

            $db = $database->openConnection();
            $sql_check = "select email, exp_date, fullname, hospital, marital_status, mobile_no, practice_licence, program, sex, speciality, teller_no, title
                        from `register` where email='$email'";

            $record = $db->query($sql_check);
            $result = $record->fetchAll();

            $p = json_decode(json_encode($result),true);

            // return print($result[0]['mobile_no']);

            echo '<html>
                    <title>Print Out</title>
                    <body>
                        <table>
                            <tr>
                                <td> Email:</td>
                                <td>' . $result[0]['email'] . '</td>
                            </tr>
                            <tr>
                                <td> Full Name: </td>
                                <td>' . $result[0]['fullname'] . '</td>
                            </tr>
                        </table>
                    </body>

                </html>';
        }

}