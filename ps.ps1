Param (
    [Parameter(Mandatory=$True)]
    [string]$data
    )

echo $data >> C:\inetpub\log.txt
return $data