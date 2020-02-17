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
            $id= $result[0]['program'];
            $id_sql_check = "select id, module from `program` where id='$id'";
            $id_record = $db->query($id_sql_check);
            $id_result= $id_record->fetchAll();
            $q = json_decode(json_encode($id_result),true);
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
                                <td>' . $result[0]['title'] .' '. $result[0]['fullname'] . '</td>
                            </tr>
                            <tr>
                                <td> Sex: </td>
                                <td>' . $result[0]['sex'] . '</td>
                            </tr>
                            <tr>
                                <td> Marital Status: </td>
                                <td>' . $result[0]['marital_status'] . '</td>
                            </tr>
                            <tr>
                                <td> Programme: </td>
                                <td>' . $id_result[0]['module'] . '</td>
                            </tr>
                            <tr>
                                <td> Speciality: </td>
                                <td>' . $result[0]['speciality'] . '</td>
                            </tr>
                            <tr>
                                <td> Place of Work: </td>
                                <td>' . $result[0]['hospital'] . '</td>
                            </tr>
                            <tr>
                                <td> Phone No: </td>
                                <td>' . $result[0]['mobile_no'] . '</td>
                            </tr>
                            <tr>
                                <td> Practice Licence: </td>
                                <td>' . $result[0]['practice_licence'] . '</td>
                            </tr>
                            <tr>
                                <td> Teller No: </td>
                                <td>' . $result[0]['teller_no'] . '</td>
                            </tr>
                        </table>
                    </body>

                </html>';
        }
}