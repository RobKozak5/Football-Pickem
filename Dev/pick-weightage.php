<?php include "js/hidden-weight.php";?>


<form id="games" action="insert-picks.php" method="POST">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                <thead class="bg-light">
                    <tr class="border-0">
                    <th class="border-0">H</th>
                    <th class="border-0">A</th>
                    <th class="border-0">Column1</th>
                    <th class="border-0">Column2</th>
                    <th class="border-0">Pick</th>
                    <select disabled="" name="hidden" style="width:0">
						<option value="0">&nbsp;</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
						</select>
                </thead>
                <tbody>
                <tr>
                    <td><input type="radio" name="Game1" value="H" checked=""></td>
                    <td><input type="radio" name="Game1" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game2" value="H" checked=""></td>
                    <td><input type="radio" name="Game2" value="A" checked=""></td>
                    <td>test3</td>
                    <td>test4</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" 
                    onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
											
												
											
												<option value="0">&nbsp;</option>
											
												
											
												<option value="1">1</option>
											
												
											
												<option value="2">2</option>
											
												
											
												<option value="3">3</option>
											
												
											
												<option value="4">4</option>
											
												
											
												<option value="5">5</option>
											
												
											
												<option value="6">6</option>
											
												
											
												<option value="7">7</option>
											
												
											
										<option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option></select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game3" value="H" checked=""></td>
                    <td><input type="radio" name="Game3" value="A" checked=""></td>
                    <td>test5</td>
                    <td>test6</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" 
                    onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
											
												
											
												<option value="0">&nbsp;</option>
											
												
											
												<option value="1">1<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></option>
											
												
											
												<option value="2">2</option>
											
												
											
												<option value="3">3</option>
											
												
											
												<option value="4">4</option>
											
												
											
												<option value="5">5</option>
											
												
											
												<option value="6">6</option>
											
												
											
												<option value="7">7</option>
											
												
											
										<option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option></select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game4" value="H" checked=""></td>
                    <td><input type="radio" name="Game4" value="A" checked=""></td>
                    <td>test7</td>
                    <td>test8</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" 
                    onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
											
												
											
												<option value="0">&nbsp;</option>
											
												
											
												<option value="1">1<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></option>
											
												
											
												<option value="2">2</option>
											
												
											
												<option value="3">3</option>
											
												
											
												<option value="4">4</option>
											
												
											
												<option value="5">5</option>
											
												
											
												<option value="6">6</option>
											
												
											
												<option value="7">7</option>
											
												
											
										<option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option></select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game5" value="H" checked=""></td>
                    <td><input type="radio" name="Game5" value="A" checked=""></td>
                    <td>test9</td>
                    <td>test10</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" 
                    onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
											
												
											
												<option value="0">&nbsp;</option>
											
												
											
												<option value="1">1</option>
											
												
											
												<option value="2">2</option>
											
												
											
												<option value="3">3</option>
											
												
											
												<option value="4">4</option>
											
												
											
												<option value="5">5</option>
											
												
											
												<option value="6">6</option>
											
												
											
												<option value="7">7</option>
											
												
											
										<option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option></select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game6" value="H" checked=""></td>
                    <td><input type="radio" name="Game6" value="A" checked=""></td>
                    <td>test11</td>
                    <td>test12</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game7" value="H" checked=""></td>
                    <td><input type="radio" name="Game7" value="A" checked=""></td>
                    <td>test13</td>
                    <td>test14</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game8" value="H" checked=""></td>
                    <td><input type="radio" name="Game8" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game9" value="H" checked=""></td>
                    <td><input type="radio" name="Game9" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game10" value="H" checked=""></td>
                    <td><input type="radio" name="Game10" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game11" value="H" checked=""></td>
                    <td><input type="radio" name="Game11" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game12" value="H" checked=""></td>
                    <td><input type="radio" name="Game12" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game13" value="H" checked=""></td>
                    <td><input type="radio" name="Game13" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game14" value="H" checked=""></td>
                    <td><input type="radio" name="Game14" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game15" value="H" checked=""></td>
                    <td><input type="radio" name="Game15" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td><input type="radio" name="Game16" value="H" checked=""></td>
                    <td><input type="radio" name="Game16" value="A" checked=""></td>
                    <td>test1</td>
                    <td>test2</td>
                    <td>
                    <select name="games" size="1" style="font-size: 8px; width:40;" onchange="removeSelected(this.form.hidden,this.form.games[0],this.form.games[1],this.form.games[2],this.form.games[3],this.form.games[4],this.form.games[5],this.form.games[6],this.form.games[7],this.form.games[8],this.form.games[9],this.form.games[10],this.form.games[11],this.form.games[12],this.form.games[13],this.form.games[14],this.form.games[15],this.form.games[0].value,this.form.games[1].value,this.form.games[2].value,this.form.games[3].value,this.form.games[4].value,this.form.games[5].value,this.form.games[6].value,this.form.games[7].value,this.form.games[8].value,this.form.games[9].value,this.form.games[10].value,this.form.games[11].value,this.form.games[12].value,this.form.games[13].value,this.form.games[14].value,this.form.games[15].value)">
                        <option value="0">&nbsp;</option>																		
                        <option value="1">1</option>											
                        <option value="2">2</option>										
                        <option value="3">3</option>											
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>	
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>
                </td>
                </tr>

                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</form>