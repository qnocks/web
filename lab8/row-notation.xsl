<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family: Arial; font-size: 12pt; background-color: #EEE">
   <xsl:for-each select="articles/article">
      <div style="background-color: teal; color: white; padding: 4px">
         <span style="font-weight: bold"><xsl:value-of select="title"/> - </span>
         <xsl:value-of select="text"/>
      </div>
      <div style="margin-left: 20px; margin-bottom: 1em; font-size: 10pt">
         <p><xsl:value-of select="createdAt"/>
            <span style="font-style: italic"> (<xsl:value-of select="updatedAt"/> обновлено)</span></p>
            <span style="margin-left: 480px; "><img style="height:200px; width:200px;"><xsl:attribute name="src"><xsl:value-of select="pic"/></xsl:attribute></img></span></div>
   </xsl:for-each>
</body>
</html>
