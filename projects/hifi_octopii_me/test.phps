<code><span style="color: #000000">
&lt;html&gt;<br /><br />&lt;head&gt;<br /><br />&lt;title&gt;&lt;/title&gt;<br /><br />&lt;/head&gt;<br /><br />&lt;body&gt;<br /><br /><span style="color: #0000BB">&lt;?php<br /><br /><br /><br /><br />mysql_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">,</span><span style="color: #DD0000">"co344095"</span><span style="color: #007700">,</span><span style="color: #DD0000">"schultze"</span><span style="color: #007700">);<br /><br />@</span><span style="color: #0000BB">mysql_select_db</span><span style="color: #007700">(</span><span style="color: #0000BB">$database</span><span style="color: #007700">)&nbsp;or&nbsp;die(&nbsp;</span><span style="color: #DD0000">"Unable&nbsp;to&nbsp;select&nbsp;database"</span><span style="color: #007700">);<br /><br /><br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">=</span><span style="color: #DD0000">"SELECT&nbsp;ProductID,&nbsp;ProductName,&nbsp;ProductImage&nbsp;FROM&nbsp;Products"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$result</span><span style="color: #007700">=</span><span style="color: #0000BB">mysql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /><br /></span><span style="color: #0000BB">$num</span><span style="color: #007700">=</span><span style="color: #0000BB">mysql_numrows</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><br /><br /><br /></span><span style="color: #0000BB">mysql_close</span><span style="color: #007700">();<br /><br /><br /><br /></span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br /><br /><br />echo&nbsp;</span><span style="color: #DD0000">"&lt;table&nbsp;border='1'&gt;&lt;tr&gt;<br />&lt;td&gt;&lt;b&gt;Number&lt;/b&gt;&lt;/td&gt;<br />&lt;td&gt;&lt;b&gt;Item&nbsp;Name&lt;/b&gt;&lt;/td&gt;<br />&lt;/tr&gt;"</span><span style="color: #007700">;<br /><br /><br />while&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$num</span><span style="color: #007700">)<br />{<br /><br /><br /></span><span style="color: #0000BB">$number</span><span style="color: #007700">=</span><span style="color: #0000BB">mysql_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">,</span><span style="color: #DD0000">"number"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">mysql_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">,</span><span style="color: #DD0000">"name"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$image</span><span style="color: #007700">=</span><span style="color: #0000BB">mysql_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">,</span><span style="color: #0000BB">$i</span><span style="color: #007700">,</span><span style="color: #DD0000">"image"</span><span style="color: #007700">);<br /><br /><br /><br />if(</span><span style="color: #0000BB">$number&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #DD0000">"0000"</span><span style="color: #007700">)<br />{<br /><br />echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&gt;<br /><br />&lt;td&gt;</span><span style="color: #0000BB">$number</span><span style="color: #DD0000">&lt;/td&gt;<br /><br />&lt;td&gt;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">&lt;/td&gt;<br /><br />&lt;/tr&gt;"</span><span style="color: #007700">;<br />}<br /><br />if(</span><span style="color: #0000BB">$image&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">)<br />{<br />echo&nbsp;</span><span style="color: #DD0000">"&lt;tr&gt;&lt;td&nbsp;colspan='2'&gt;&lt;img&nbsp;src='images/"</span><span style="color: #007700">.</span><span style="color: #0000BB">$image</span><span style="color: #007700">.</span><span style="color: #DD0000">"'&gt;&lt;/td&gt;&lt;/tr&gt;"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />}<br /><br />echo&nbsp;</span><span style="color: #DD0000">"&lt;/table&gt;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;<br /></span><br />&lt;/body&gt;<br /><br />&lt;/html&gt;</span>
</code>