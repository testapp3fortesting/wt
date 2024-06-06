<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/">
        <h1>Students</h1>
        <ul>
            <xsl:for-each select="students/student">
                <li>
                    <xsl:value-of select="name"/>
                    <xsl:if test="age &gt; 18">
                        (adult)
                    </xsl:if>
                </li>
            </xsl:for-each>
        </ul>
    </xsl:template>
</xsl:stylesheet>