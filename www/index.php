<html width="100%">
<head>
<meta http-equiv="refresh" content="90">
</head>
<body bgcolor="#000000">
<table width=180><tr><td>
<center>
<?php
    include "./playing.php";
    include "./stations.php";

    if ($stopped == "true") {
        echo "<td>";
        echo "<form name=\"startform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"start\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"Start\"/></form>\n";
        echo "</td>";
    } else {
        echo "<form name=\"stationform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<select name=\"station\">\n";

        for ($s = 0; $s < $stationCount; $s++) {
            echo "<option value=\"$s\"";
            if ($station[$s] == $stationName) {
                    echo "<option value=\"$s\" selected>$station[$s]</option>\n";
            } else {
                    echo "<option value=\"$s\">$station[$s]</option>\n";
            }
        }
        echo "</select>\n";
        echo "<input type=\"submit\" value=\"New Station\"/>\n";
        echo "</form>";

        if ( $coverArt != "" ) {
                echo "<img width=\"200\" src=$coverArt>\n";
        }
        echo "<font color=\"white\" size='-1'>\n";
        echo "<br>$title<br>$artist<br>$album<br>\n";

        echo "<table cellspacing='0' cellpadding='0'>";
        echo "<tr>";
        echo "<td>";
        echo "<form name=\"loveform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"love\" value=\"true\" />\n";
        if ($rating != '1') {
            echo "<input type=\"submit\" value=\"Love\"/></form>\n";
        } else {
            echo "<input type=\"submit\" style=\"background-color: \#e77dd2; color: \#000000;\" value=\"LOVE\"/></form>\n";
        }
        echo "</td>";

        echo "<td>";
        echo "<form name=\"banform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"ban\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"Ban\"/></form>\n";
        echo "</td>";

        echo "<td>";
        echo "<form name=\"skipform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"skip\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"Skip\"/></form>\n";
        echo "</td>";

        echo "<td>";
        echo "<form name=\"quitform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"quit\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"Quit\"/></form>\n";
        echo "</td>";

        echo "</tr>\n";
        echo "<tr>\n";

        echo "<td align='center'>";
        echo "<form name=\"voldwnform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"voldwn\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"-\"/></form>";
        echo "</td>\n";

        echo "<td align='center'>";
        echo "<form name=\"volupform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"volup\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"+\"/></form>";
        echo "</td>\n";

        echo "<td align='center'>";
        echo "<form name=\"tiredform\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"tired\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"Tired\"/></form>";
        echo "</td>\n";

        echo "<td align='center'>";
        echo "<form name=\"pause\" action=\"pb_modify.php\" method=\"POST\">\n";
        echo "<input type=\"hidden\" name=\"pause\" value=\"true\" />\n";
        echo "<input type=\"submit\" value=\"||\"/></form>";
        echo "</td>\n";

        echo "</tr>\n";
        echo "</table>\n";
    }
?>
</center>
</td></tr></table>
</body></html>

