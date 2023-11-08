
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calender</title>
    <link rel="stylesheet" href="reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Roboto&display=swap&family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body onload="startTime()">
        <div class="wrap">
        <div class="wrap_text">
            <span>2023 , </span>
            <span>June</span>
        </div>
        <img src="https://i.imgur.com/IlRhXr5.gif" class="wrap_bg" alt="bg2">
        
    </div>
    <div class="container">
        <div class="time">2023 / 11 / 05</div>
        <div id="clock"></div>
        
        <table>
            <tr>
                <td>SUN</td>
                <td>MON</td>
                <td>TUE</td>
                <td>WED</td>
                <td>THU</td>
                <td>TUR</td>
                <td>SAT</td>
            </tr>
            <tr><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td></tr><tr><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td></tr><tr><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td></tr><tr><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td></tr><tr><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td></td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table>
            <div class="btn">
                    <a class="lastM" href="index.php?year=2023&month=5">Last month</a>
                    <form action="?" method="get">
                <div class="selec">
                    <span>西元</span>
                    <select name="year" id="">
                        <option value='1923'>1923</option><option value='1924'>1924</option><option value='1925'>1925</option><option value='1926'>1926</option><option value='1927'>1927</option><option value='1928'>1928</option><option value='1929'>1929</option><option value='1930'>1930</option><option value='1931'>1931</option><option value='1932'>1932</option><option value='1933'>1933</option><option value='1934'>1934</option><option value='1935'>1935</option><option value='1936'>1936</option><option value='1937'>1937</option><option value='1938'>1938</option><option value='1939'>1939</option><option value='1940'>1940</option><option value='1941'>1941</option><option value='1942'>1942</option><option value='1943'>1943</option><option value='1944'>1944</option><option value='1945'>1945</option><option value='1946'>1946</option><option value='1947'>1947</option><option value='1948'>1948</option><option value='1949'>1949</option><option value='1950'>1950</option><option value='1951'>1951</option><option value='1952'>1952</option><option value='1953'>1953</option><option value='1954'>1954</option><option value='1955'>1955</option><option value='1956'>1956</option><option value='1957'>1957</option><option value='1958'>1958</option><option value='1959'>1959</option><option value='1960'>1960</option><option value='1961'>1961</option><option value='1962'>1962</option><option value='1963'>1963</option><option value='1964'>1964</option><option value='1965'>1965</option><option value='1966'>1966</option><option value='1967'>1967</option><option value='1968'>1968</option><option value='1969'>1969</option><option value='1970'>1970</option><option value='1971'>1971</option><option value='1972'>1972</option><option value='1973'>1973</option><option value='1974'>1974</option><option value='1975'>1975</option><option value='1976'>1976</option><option value='1977'>1977</option><option value='1978'>1978</option><option value='1979'>1979</option><option value='1980'>1980</option><option value='1981'>1981</option><option value='1982'>1982</option><option value='1983'>1983</option><option value='1984'>1984</option><option value='1985'>1985</option><option value='1986'>1986</option><option value='1987'>1987</option><option value='1988'>1988</option><option value='1989'>1989</option><option value='1990'>1990</option><option value='1991'>1991</option><option value='1992'>1992</option><option value='1993'>1993</option><option value='1994'>1994</option><option value='1995'>1995</option><option value='1996'>1996</option><option value='1997'>1997</option><option value='1998'>1998</option><option value='1999'>1999</option><option value='2000'>2000</option><option value='2001'>2001</option><option value='2002'>2002</option><option value='2003'>2003</option><option value='2004'>2004</option><option value='2005'>2005</option><option value='2006'>2006</option><option value='2007'>2007</option><option value='2008'>2008</option><option value='2009'>2009</option><option value='2010'>2010</option><option value='2011'>2011</option><option value='2012'>2012</option><option value='2013'>2013</option><option value='2014'>2014</option><option value='2015'>2015</option><option value='2016'>2016</option><option value='2017'>2017</option><option value='2018'>2018</option><option value='2019'>2019</option><option value='2020'>2020</option><option value='2021'>2021</option><option value='2022'>2022</option><option value='2023'>2023</option><option value='2023' selected>2023</option><option value='2024'>2024</option><option value='2025'>2025</option><option value='2026'>2026</option><option value='2027'>2027</option><option value='2028'>2028</option><option value='2029'>2029</option><option value='2030'>2030</option><option value='2031'>2031</option><option value='2032'>2032</option><option value='2033'>2033</option><option value='2034'>2034</option><option value='2035'>2035</option><option value='2036'>2036</option><option value='2037'>2037</option><option value='2038'>2038</option><option value='2039'>2039</option><option value='2040'>2040</option><option value='2041'>2041</option><option value='2042'>2042</option><option value='2043'>2043</option><option value='2044'>2044</option><option value='2045'>2045</option><option value='2046'>2046</option><option value='2047'>2047</option><option value='2048'>2048</option><option value='2049'>2049</option><option value='2050'>2050</option><option value='2051'>2051</option><option value='2052'>2052</option><option value='2053'>2053</option><option value='2054'>2054</option><option value='2055'>2055</option><option value='2056'>2056</option><option value='2057'>2057</option><option value='2058'>2058</option><option value='2059'>2059</option><option value='2060'>2060</option><option value='2061'>2061</option><option value='2062'>2062</option><option value='2063'>2063</option><option value='2064'>2064</option><option value='2065'>2065</option><option value='2066'>2066</option><option value='2067'>2067</option><option value='2068'>2068</option><option value='2069'>2069</option><option value='2070'>2070</option><option value='2071'>2071</option><option value='2072'>2072</option><option value='2073'>2073</option><option value='2074'>2074</option><option value='2075'>2075</option><option value='2076'>2076</option><option value='2077'>2077</option><option value='2078'>2078</option><option value='2079'>2079</option><option value='2080'>2080</option><option value='2081'>2081</option><option value='2082'>2082</option><option value='2083'>2083</option><option value='2084'>2084</option><option value='2085'>2085</option><option value='2086'>2086</option><option value='2087'>2087</option><option value='2088'>2088</option><option value='2089'>2089</option><option value='2090'>2090</option><option value='2091'>2091</option><option value='2092'>2092</option><option value='2093'>2093</option><option value='2094'>2094</option><option value='2095'>2095</option><option value='2096'>2096</option><option value='2097'>2097</option><option value='2098'>2098</option><option value='2099'>2099</option><option value='2100'>2100</option><option value='2101'>2101</option><option value='2102'>2102</option><option value='2103'>2103</option><option value='2104'>2104</option><option value='2105'>2105</option><option value='2106'>2106</option><option value='2107'>2107</option><option value='2108'>2108</option><option value='2109'>2109</option><option value='2110'>2110</option><option value='2111'>2111</option><option value='2112'>2112</option><option value='2113'>2113</option><option value='2114'>2114</option><option value='2115'>2115</option><option value='2116'>2116</option><option value='2117'>2117</option><option value='2118'>2118</option><option value='2119'>2119</option><option value='2120'>2120</option><option value='2121'>2121</option><option value='2122'>2122</option><option value='2123'>2123</option>                    </select>
                    <span>年</span>
                    <select name="month" id="">
                        <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6' selected>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                    </select>
                    <span>月</span>
                    <input type="submit" value="查詢">
                    </form>
                </div>
                <a class="nextM" href="index.php?year=2023&month=7">Next month</a>
                <a class="thisM" href="index.php">本月</a>
            </div>
    </div>


    <script>
        function startTime() {
            var today = new Date();
            var hh = today.getHours();
            var mm = today.getMinutes();
            var ss = today.getSeconds();
            mm = checkTime(mm);
            ss = checkTime(ss);
            document.getElementById('clock').innerHTML = hh + " : " + mm + " : " + ss;
            var timeoutId = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>

</body>

</html>