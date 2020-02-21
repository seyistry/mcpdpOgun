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
                    <link
                        rel="stylesheet"
                        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                        crossorigin="anonymous"
                    />
                    <link rel="stylesheet" href="css/main.css" />
                    <script> 
                        function printDiv() { 
                            var divContents = document.getElementById("printableArea").innerHTML; 
                            var a = window.open(); 
                            a.document.write("<html>"); 
                            a.document.write("<body > <h3>MCPDP OGUN STATE</h3><br>"); 
                            a.document.write(divContents); 
                            a.document.write("</body></html>"); 
                            a.document.close(); 
                            a.print(); 
                        } 
                    </script> 
                    <body>
                        <div class="container" id="printableArea" style="border: 2px solid black"> 
                            <table class="table">
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Full Name: </td>
                                    <td>' . $result[0]['title'] .' '. $result[0]['fullname'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Email:</td>
                                    <td>' . $result[0]['email'] . '</td>
                                </tr>
                                
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Sex: </td>
                                    <td>' . $result[0]['sex'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Marital Status: </td>
                                    <td>' . $result[0]['marital_status'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Programme: </td>
                                    <td>' . $id_result[0]['module'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Speciality: </td>
                                    <td>' . $result[0]['speciality'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Place of Work: </td>
                                    <td>' . $result[0]['hospital'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Phone No: </td>
                                    <td>' . $result[0]['mobile_no'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Practice Licence: </td>
                                    <td>' . $result[0]['practice_licence'] . '</td>
                                </tr>
                                <tr style="font-weight:bold;padding:100px 0">
                                    <td> Teller No: </td>
                                    <td>' . $result[0]['teller_no'] . '</td>
                                </tr>
                            </table>
                            <div style="text-align: center;">
                                <!-- insert your custom barcode setting your data in the GET parameter "data" -->
                                <img alt="barcode" src="./img/barcode.svg"/>
                            </div>
                        </div>
                        <div class="container">
                            <center>
                            <button type="submit" class="btn-submit my-4" value="click" onclick="printDiv()">
                                <b>Print</b>
                            </button>
                            </center>
                            
                        </div>
                        
                    </body>

                </html>';
        }
}