<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>Products</title>
                <style>
                    table{
                        border-collapse : collapse;
                        width : 400px;
                    }
                    th,td{
                        border : 1px solid #ddd;
                        padding : 10px;
                    }
                    th{
                        color : blue;
                        text-align:left;
                    }
                </style>
            </head>
            <body>
                <h1>Products</h1>
                <table>
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>CATEGORY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="products/product">
                            <xsl:sort select="price" order="ascending"/>
                            <tr>
                                <td><xsl:value-of select="name" /></td>
                                <td><xsl:value-of select="price" /></td>
                                <td><xsl:value-of select="category" /></td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </body> 
        </html>       
    </xsl:template>
</xsl:stylesheet>