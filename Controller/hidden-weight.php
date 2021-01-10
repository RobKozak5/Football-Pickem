<script language="Javascript">

function onchange(event) {
  removeSelected(this.form.hidden, this.form.games[0], this.form.games[1], this.form.games[2], this.form.games[3], this.form.games[4], this.form.games[5], this.form.games[6], this.form.games[7], this.form.games[8], this.form.games[9], this.form.games[10], this.form.games[11], this.form.games[12], this.form.games[13], this.form.games[14], this.form.games[15], this.form.games[0].value, this.form.games[1].value, this.form.games[2].value, this.form.games[3].value, this.form.games[4].value, this.form.games[5].value, this.form.games[6].value, this.form.games[7].value, this.form.games[8].value, this.form.games[9].value, this.form.games[10].value, this.form.games[11].value, this.form.games[12].value, this.form.games[13].value, this.form.games[14].value, this.form.games[15].value)
}
function removeSelected( h, g1, g2, g3, g4, g5, g6, g7, g8, g9, g10, g11, g12, g13, g14, g15, g16, vg1, vg2, vg3, vg4, vg5, vg6, vg7, vg8, vg9, vg10, vg11, vg12, vg13, vg14, vg15, vg16 ) 
{
  var p1  = 0; var p2  = 0; var p3  = 0; var p4  = 0; var p5  = 0; var p6  = 0; var p7  = 0; var p8  = 0; var p9  = 0; var p10 = 0; var p11 = 0; var p12 = 0; var p13 = 0; var p14 = 0; var p15 = 0; var p16 = 0;  
  for (var i = 0; i < 17; i++ )
	{	g1.options[i]  = null; g2.options[i]  = null; g3.options[i]  = null; g4.options[i]  = null; g5.options[i]  = null; g6.options[i]  = null; g7.options[i]  = null; g8.options[i]  = null; g9.options[i]  = null; g10.options[i] = null; g11.options[i] = null; g12.options[i] = null; g13.options[i] = null; g14.options[i] = null; g15.options[i] = null; g16.options[i] = null;
		if ( ( h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg1 )
			{	g1[p1] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p1++;
			}	else
			{	g1[p1] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p1++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg2 )
			{	g2[p2] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p2++;
			}	else
			{	g2[p2] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p2++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg3 )
			{	g3[p3] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p3++;
			}	else
			{	g3[p3] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p3++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg4 )
			{	g4[p4] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p4++;
			}	else
			{	g4[p4] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p4++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg5 )
			{	g5[p5] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p5++;
			}	else
			{	g5[p5] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p5++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg6 )
			{	g6[p6] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p6++;
			}	else
			{	g6[p6] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p6++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg7 )
			{	g7[p7] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p7++;
			}	else
			{	g7[p7] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p7++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg8 )
			{	g8[p8] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p8++;
			}	else
			{	g8[p8] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p8++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg9 )
			{	g9[p9] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p9++;
			}	else
			{	g9[p9] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p9++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg10 )
			{	g10[p10] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p10++;
			}	else
			{	g10[p10] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p10++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg11 )
			{	g11[p11] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p11++;
			}	else
			{	g11[p11] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p11++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg12 )
			{	g12[p12] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p12++;
			}	else
			{	g12[p12] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p12++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg14 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg13 )
			{	g13[p13] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p13++;
			}	else
			{	g13[p13] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p13++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg15 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg14 )
			{g14[p14] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p14++;
			}	else
			{	g14[p14] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p14++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg16 ) || i == 0 )
		{	if ( h.options[i].value == vg15 )
			{	g15[p15] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p15++;
			}	else
			{	g15[p15] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p15++;
			}
		}
		if ( ( h.options[i].value != vg1  && h.options[i].value != vg2  && h.options[i].value != vg3  && h.options[i].value != vg4  && h.options[i].value != vg5  && h.options[i].value != vg6  && h.options[i].value != vg7  && h.options[i].value != vg8  && h.options[i].value != vg9  && h.options[i].value != vg10 && h.options[i].value != vg11 && h.options[i].value != vg12 && h.options[i].value != vg13 && h.options[i].value != vg14 && h.options[i].value != vg15 ) || i == 0 )
		{	if ( h.options[i].value == vg16 )
			{	g16[p16] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, true);
				p16++;
			}	else
			{	g16[p16] = new Option( h.options[i].text, h.options[i].value, h.options[i].defaultselected, h.options[i].selected);
				p16++;
			}
		}
	}
} // End of removeSelected()

</script>