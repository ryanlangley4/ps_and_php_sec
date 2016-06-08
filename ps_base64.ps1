Param (
    [Parameter(Mandatory=$True)]
    [string]$data
    )
$value = [System.Text.Encoding]::UTF8.GetString([System.Convert]::FromBase64String($data))
echo $value >> C:\inetpub\log.txt
return $value