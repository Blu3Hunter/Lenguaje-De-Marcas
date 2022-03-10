<?xml version="1.0" encoding="UTF-8" ?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">

        <html>
            <body>
                <h2>All Pets</h2>
                <table border="1">
                    <tr bgcolor="#9acd32">
                        <td><strong>ID</strong></td>
                        <td><strong>Name</strong></td>
                        <td><strong>Health status</strong></td>
                    </tr>
                    <xsl:for-each select="pets/petType/pet">
                            <xsl:sort select="@name"/>
                        <tr>
                            <td><xsl:value-of select="@id"></xsl:value-of></td>
                            <td><xsl:value-of select="@name"></xsl:value-of></td>
                            <td><xsl:value-of select="@healthStatus"></xsl:value-of></td>
                            
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>

    </xsl:template>

</xsl:stylesheet>