<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Laudo Técnico - Asset Management</title>
    </head>
    <body>
        <h1>Coletando informações de Hardware</h1>
            <?php
                $obj = new COM ( 'winmgmts://localhost/root/CIMV2' );
                $fso = new COM ( "Scripting.FileSystemObject" );

                $wmi_computersystem    =    $obj->ExecQuery("Select * from Win32_ComputerSystem");
                $wmi_bios              =    $obj->ExecQuery("Select * from Win32_BIOS");
                $processor             =    $obj->ExecQuery("Select * from Win32_Processor");
                $PhysicalMemory        =    $obj->ExecQuery("Select * from Win32_PhysicalMemory");
                $BaseBoard             =    $obj->ExecQuery("Select * from Win32_BaseBoard");
                $LogicalDisk           =    $obj->ExecQuery("Select * from Win32_LogicalDisk");
                $DiskDrive             =    $obj->ExecQuery("Select * from Win32_DiskDrive");


                foreach ( $wmi_computersystem as $wmi_call )
                {
                    $model = $wmi_call->Model;
                }

                foreach ( $wmi_bios as $wmi_call )
                {
                    $serial = $wmi_call->SerialNumber;
                    $bios_version = $wmi_call->SMBIOSBIOSVersion;
                }

                foreach ( $processor as $wmi_processor )
                {
                    $Name = $wmi_processor->Name;
                }
                
                foreach ( $PhysicalMemory as $wmi_PhysicalMemory )
                {
                    $Capacity = $wmi_PhysicalMemory->Capacity;
                    $Speed = $wmi_PhysicalMemory->Speed;
                }

                foreach ( $LogicalDisk as $wmi_LogicalDisk )
                {
                    $Size = $wmi_LogicalDisk->Size / 1073741824;
                    $FreeSpace = $wmi_LogicalDisk->FreeSpace / 1073741824;

                }

                foreach ( $DiskDrive as $wmi_DiskDrive )
                {
                    $InterfaceType = $wmi_DiskDrive->InterfaceType;
                    $Caption = $wmi_DiskDrive->caption;
                }

   
                echo "Informações do Modelo<br/>
                    Número Serial: ".$serial."<br/>
                    Modelo Equipamento: ".$model."<br/>
                    Versão da BIOS: ".$bios_version."<br/>
                    Processador: ".$Name."<br/>
                    <hr>
                    <hr>
                    Memória RAM.<br/>
                    Capacidade: ".$Capacity."<br/>
                    Barramento: ".$Speed."<br/>
                    <hr>
                    <hr>
                    Armazenamento.<br/>
                    Tamanho :   ".number_format((int)$Size, 0)." GB<br/>
                    Espaço Livre: ".number_format((int)$FreeSpace, 0)." GB<br/>
                    Interface  : ".$InterfaceType."<br/>
                    ";
    
    
            ?>
    </body>
</html>
