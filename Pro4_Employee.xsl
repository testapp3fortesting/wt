<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
            <head>
                <title>Employees</title>
                <style>
                    table {
                        border-collapse : collapse;
                        width : 400px;
                    }
                    th,td{
                        border : 1px solid #ddd;
                        padding : 8px;
                    }
                    th{
                        color : blue;
                        text-align : left;
                    }
                </style>
            </head>
            <body>
                <h2>Employees</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DEPARTMENT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="employees/employee">
                        <tr>
                            <td><xsl:value-of select="id" /></td>
                            <td><xsl:value-of select="name" /></td>
                            <td><xsl:value-of select="department" /></td>
                        </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>