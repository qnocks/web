<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <h2>Файл xsl. Коллекция статей</h2>
   <table border="1">
     <tr bgcolor="#9acd32">
       <th style="text-align:left">Название</th>
       <th style="text-align:left">Автор</th>
       <th style="text-align:left">Картинка</th>
     </tr>
     <xsl:for-each select="articles/article">
     <tr>
       <td><xsl:value-of select="title" /></td>
       <td><xsl:value-of select="author" /></td>
       <td><span style="margin-left: 480px; "><img style="height:200px; width:200px;"><xsl:attribute name="src"><xsl:value-of select="pic"/></xsl:attribute></img></span></td>
     </tr>
     </xsl:for-each>
   </table>
</xsl:template>
</xsl:stylesheet>
