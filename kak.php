<?php
    if(isset($_POST['submit'])){
        $color=array('blue','red','black','green','yellow');
        $num_player=$_POST['player'];
        $player=array();
        for ($i=1; $i<=$num_player; $i++) { 
            $player[$i]=$_POST['player'.$i];
        }
?>
<html>
    <head>
        <title>King and Knights</title>
        <script src="https://kit.fontawesome.com/3ff269eea1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="kak.css">
    </head>
    <body>
        <div class="main">
            <div class="head">
                <div class="back">  
                    <a href="kakindex.html"><i class="fas fa-arrow-circle-left"></i>Back</a>
                </div>
                <div class="name">
                    <p>king and Knights (രാജാവും കുതിരയും)</p>
                </div>
            </div>
            <div class="body">
                <div class="details">
                    <div class="player" id="player" data-value="<?php echo $num_player?>">
                    <?php
                        for($i=$num_player;$i>=1;$i--){
                    ?>
                        <div class="playerking player<?php echo $i ?>" id="nextplayer<?php echo $player[$i]?>">
                            <div class="icon">
                                <img src="icons/king.png" style="width:85px;filter: opacity(.5) drop-shadow(0 0 0 <?php echo $color[$i-1]?>)">
                            </div>
                            <div class="playername" id="player<?php echo $i?>" data-value="<?php echo $player[$i]?>">
                                <?php echo "<p>".$player[$i]."</p>"?>
                                <div id="playerposition<?php echo $player[$i]?>" >

                                </div>
                            </div>
                        </div>
                    <?php        
                        }
                    ?>                        
                    </div>
                    <div class="dice">
                        <div class="sdice">
                            <div class="currplayer" id="currplayer">

                            </div>
                            <div class="diceno" id="diceno">

                            </div>
                        </div>
                        <div class="roll">
                            <button autofocus onclick="move()" id="rollbutton">roll</button>
                        </div>
                    </div>
                </div>
                <div class="board">
                    <table class="salboard">
                        <tr>
                            <th class="piece light" id="100"><div class="pieceno"><p>100</p></div></th>
                            <th class="piece dark" id="99"><div class="pieceno"><p>99</p></div></th>
                            <th class="piece light" id="98"><div class="pieceno"><p>98</p></div></th>
                            <th class="piece dark" id="97"><div class="pieceno"><p>97</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece light" id="96"><div class="pieceno"><p>96</p></div></th>
                            <th class="piece dark" id="95"><div class="pieceno"><p>95</p></div></th>
                            <th class="piece light" id="94"><div class="pieceno"><p>94</p></div></th>
                            <th class="piece dark" id="93"><div class="pieceno"><p>93</p></div></th>
                            <th class="piece light" id="92"><div class="pieceno"><p>92</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece dark" id="91"><div class="pieceno"><p>91</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece dark" id="81"><div class="pieceno"><p>81</p></div></th>
                            <th class="piece light" id="82"><div class="pieceno"><p>82</p></div></th>
                            <th class="piece dark" id="83"><div class="pieceno"><p>83</p></div></th>
                            <th class="piece light" id="84"><div class="pieceno"><p>84</p></div></th>
                            <th class="piece dark" id="85"><div class="pieceno"><p>85</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece light" id="86"><div class="pieceno"><p>86</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece dark" id="87"><div class="pieceno"><p>87</p></div></th>
                            <th class="piece light" id="88"><div class="pieceno"><p>88</p></div></th>
                            <th class="piece dark" id="89"><div class="pieceno"><p>89</p></div></th>
                            <th class="piece light" id="90"><div class="pieceno"><p>90</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece light" id="80"><div class="pieceno"><p>80</p></div></th>
                            <th class="piece dark" id="79"><div class="pieceno"><p>79</p></div></th>
                            <th class="piece light" id="78"><div class="pieceno"><p>78</p></div></th>
                            <th class="piece dark" id="77"><div class="pieceno"><p>77</p></div></th>
                            <th class="piece light" id="76"><div class="pieceno"><p>76</p></div></th>
                            <th class="piece dark" id="75"><div class="pieceno"><p>75</p></div></th>
                            <th class="piece light" id="74"><div class="pieceno"><p>74</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece dark" id="73"><div class="pieceno"><p>73</p></div></th>
                            <th class="piece light" id="72"><div class="pieceno"><p>72</p></div></th>
                            <th class="piece dark" id="71"><div class="pieceno"><p>71</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece dark" id="61"><div class="pieceno"><p>61</p></div></th>
                            <th class="piece light" id="62"><div class="pieceno"><p>62</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece dark" id="63"><div class="pieceno"><p>63</p></div></th>
                            <th class="piece light" id="64"><div class="pieceno"><p>64</p></div></th>
                            <th class="piece dark" id="65"><div class="pieceno"><p>65</p></div></th>
                            <th class="piece light" id="66"><div class="pieceno"><p>66</p></div></th>
                            <th class="piece dark" id="67"><div class="pieceno"><p>67</p></div></th>
                            <th class="piece light" id="68"><div class="pieceno"><p>68</p></div></th>
                            <th class="piece dark" id="69"><div class="pieceno"><p>69</p></div></th>
                            <th class="piece light" id="70"><div class="pieceno"><p>70</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece light" id="60"><div class="pieceno"><p>60</p></div></th>
                            <th class="piece dark" id="59"><div class="pieceno"><p>59</p></div></th>
                            <th class="piece light" id="58"><div class="pieceno"><p>58</p></div></th>
                            <th class="piece dark" id="57"><div class="pieceno"><p>57</p></div></th>
                            <th class="piece light" id="56"><div class="pieceno"><p>56</p></div></th>
                            <th class="piece dark" id="55"><div class="pieceno"><p>55</p></div></th>
                            <th class="piece light" id="54"><div class="pieceno"><p>54</p></div></th>
                            <th class="piece dark" id="53"><div class="pieceno"><p>53</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece light" id="52"><div class="pieceno"><p>52</p></div></th>
                            <th class="piece dark" id="51"><div class="pieceno"><p>51</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece dark" id="41"><div class="pieceno"><p>41</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece light" id="42"><div class="pieceno"><p>42</p></div></th>
                            <th class="piece dark" id="43"><div class="pieceno"><p>43</p></div></th>
                            <th class="piece light" id="44"><div class="pieceno"><p>44</p></div></th>
                            <th class="piece dark" id="45"><div class="pieceno"><p>45</p></div></th>
                            <th class="piece light" id="46"><div class="pieceno"><p>46</p></div></th>
                            <th class="piece dark" id="47"><div class="pieceno"><p>47</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece light" id="48"><div class="pieceno"><p>48</p></div></th>
                            <th class="piece dark" id="49"><div class="pieceno"><p>49</p></div></th>
                            <th class="piece light" id="50"><div class="pieceno"><p>50</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece light" id="40"><div class="pieceno"><p>40</p></div></th>
                            <th class="piece dark" id="39"><div class="pieceno"><p>39</p></div></th>
                            <th class="piece light" id="38"><div class="pieceno"><p>38</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece dark" id="37"><div class="pieceno"><p>37</p></div></th>
                            <th class="piece light" id="36"><div class="pieceno"><p>36</p></div></th>
                            <th class="piece dark" id="35"><div class="pieceno"><p>35</p></div></th>
                            <th class="piece light" id="34"><div class="pieceno"><p>34</p></div></th>
                            <th class="piece dark" id="33"><div class="pieceno"><p>33</p></div></th>
                            <th class="piece light" id="32"><div class="pieceno"><p>32</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece dark" id="31"><div class="pieceno"><p>31</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece dark" id="21"><div class="pieceno"><p>21</p></div></th>
                            <th class="piece light" id="22"><div class="pieceno"><p>22</p></div></th>
                            <th class="piece dark" id="23"><div class="pieceno"><p>23</p></div></th>
                            <th class="piece light" id="24"><div class="pieceno"><p>24</p></div></th>
                            <th class="piece dark" id="25"><div class="pieceno"><p>25</p></div></th>
                            <th class="piece light" id="26"><div class="pieceno"><p>26</p></div></th>
                            <th class="piece dark" id="27"><div class="pieceno"><p>27</p></div></th>
                            <th class="piece light" id="28"><div class="pieceno"><p>28</p></div></th>
                            <th class="piece dark" id="29"><div class="pieceno"><p>29</p></div><div class="pieceicon"><img src="icons/soldier.png"></div></th>
                            <th class="piece light" id="30"><div class="pieceno"><p>30</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece light" id="20"><div class="pieceno"><p>20</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece dark" id="19"><div class="pieceno"><p>19</p></div></th>
                            <th class="piece light" id="18"><div class="pieceno"><p>18</p></div></th>
                            <th class="piece dark" id="17"><div class="pieceno"><p>17</p></div></th>
                            <th class="piece light" id="16"><div class="pieceno"><p>16</p></div></th>
                            <th class="piece dark" id="15"><div class="pieceno"><p>15</p></div></th>
                            <th class="piece light" id="14"><div class="pieceno"><p>14</p></div></th>
                            <th class="piece dark" id="13"><div class="pieceno"><p>13</p></div></th>
                            <th class="piece light" id="12"><div class="pieceno"><p>12</p></div></th>
                            <th class="piece dark" id="11"><div class="pieceno"><p>11</p></div></th>
                        </tr>
                        <tr>
                            <th class="piece dark" id="1"><div class="pieceno"><p>1</p></div></th>
                            <th class="piece light" id="2"><div class="pieceno"><p>2</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece dark" id="3"><div class="pieceno"><p>3</p></div></th>
                            <th class="piece light" id="4"><div class="pieceno"><p>4</p></div></th>
                            <th class="piece dark" id="5"><div class="pieceno"><p>5</p></div></th>
                            <th class="piece light" id="6"><div class="pieceno"><p>6</p></div></th>
                            <th class="piece dark" id="7"><div class="pieceno"><p>7</p></div></th>
                            <th class="piece light" id="8"><div class="pieceno"><p>8</p></div><div class="pieceicon"><img src="icons/horse.png"></div></th>
                            <th class="piece dark" id="9"><div class="pieceno"><p>9</p></div></th>
                            <th class="piece light" id="10"><div class="pieceno"><p>10</p></div></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <script src="kak.js"></script>
    </body>
</html>
<?php
    }
?>


