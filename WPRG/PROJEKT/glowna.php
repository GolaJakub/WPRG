<?php

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Phycial Units Calculator</title>
    </head>
    <body>
    <h1>Phycial Units Calculator</h1>
        <FORM action="checker.php" method="POST">
            <table>
                <TR>
                    <TD>Select unit to convert</TD>
                    <TD>
                        <select name="unit">
                            <optgroup label="pressure">
                                <option value="Pa">Pascal</option>
                                <option value="MPa">Megapascal</option>
                                <option value="Ba">Bar</option>
                                <option value="atm">atmosphere</option>
                                <option value="kg/m2">kg/m2</option>
                                <option value="PSI">PSI</option>
                            </optgroup>
                            <optgroup label="time">
                                <option value="second">Second</option>
                                <option value="minute">Minute</option>
                                <option value="hour">Hour</option>
                                <option value="day">Day</option>
                                <option value="week">Week</option>
                                <option value="month">Month</option>
                                <option value="year">Year</option>
                            </optgroup>
                            <optgroup label="length">
                                <option value="millimeter">Millimeter</option>
                                <option value="centimeter">Centimeter</option>
                                <option value="centimeter">Centimeter</option>
                            </optgroup>
                            <option value="length">length</option>
                            <option value="energy">energy</option>
                            <option value="energy">energy</option>
                            <option value="mass">mass</option>
                            <option value="volume">volume</option>
                            <option value="area">area</option>
                            <option value="velocity">velocity</option>
                            <option value="force">force</option>
                            <option value="temperature">temperature</option>
                        </select>
                    </TD>
                </TR>

                <TR>
                    <TD>Select unit which you want to convert to</TD>
                    <TD>
                        <select name="unitConv">
                            <optgroup label="pressure">
                                <option value="Pa">Pascal</option>
                                <option value="Ba">Bar</option>
                            </optgroup>

                            <option value="time">time</option>
                            <option value="length">length</option>
                            <option value="energy">energy</option>
                            <option value="energy">energy</option>
                            <option value="mass">mass</option>
                            <option value="volume">volume</option>
                            <option value="area">area</option>
                            <option value="velocity">velocity</option>
                            <option value="force">force</option>
                            <option value="temperature">temperature</option>
                        </select>
                    </TD>
                </TR>

                <TR>
                    <TD><INPUT type="submit" value="Check"></TD>
                </TR>
            </table>

        </FORM>
        <footer>
            <p style="font-size:14px; color:#dbdbdb">(c) Made By RandomE</p>
        </footer>
    </body>

</html>