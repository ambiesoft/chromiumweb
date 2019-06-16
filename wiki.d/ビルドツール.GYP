version=pmwiki-2.2.102 ordered=1 urlencoded=1
agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:55.0) Gecko/20100101 Firefox/55.0
author=
charset=UTF-8
csum=
ctime=1502850680
host=192.168.0.2
name=ビルドツール.GYP
rev=5
targets=
text=https://gyp.gsrc.io/%0a%0a現在はGYPの代わりにGNを使うので参考程度。%0a%0aメタビルドツール、他のビルドツールのための入力ファイルを作成する。マルチプラットフォームの大きいプロジェクトで使う。XCodeやVisual Studio、Ninjaなどの入力ファイルを作成できる。.gypファイルを読み込む。%0a%0a!.gypのスケルトン%0a [=%0a  {%0a    'variables': {%0a      .%0a      .%0a      .%0a    },%0a    'includes': [%0a      '../build/common.gypi',%0a    ],%0a    'target_defaults': {%0a      .%0a      .%0a      .%0a    },%0a    'targets': [%0a      {%0a        'target_name': 'target_1',%0a          .%0a          .%0a          .%0a      },%0a      {%0a        'target_name': 'target_2',%0a          .%0a          .%0a          .%0a      },%0a    ],%0a    'conditions': [%0a      ['OS=="linux"', {%0a        'targets': [%0a          {%0a            'target_name': 'linux_target_3',%0a              .%0a              .%0a              .%0a          },%0a        ],%0a      }],%0a      ['OS=="win"', {%0a        'targets': [%0a          {%0a            'target_name': 'windows_target_4',%0a              .%0a              .%0a              .%0a          },%0a        ],%0a      }, { # OS != "win"%0a        'targets': [%0a          {%0a            'target_name': 'non_windows_target_5',%0a              .%0a              .%0a              .%0a          },%0a      }],%0a    ],%0a  }%0a =]%0apythonの辞書として記述される。（JSON＋python拡張）%0a
time=1503730420
author:1503730420=
diff:1503730420:1502851521:=2,3d1%0a%3c %0a%3c 現在はGYPの代わりにGNを使うので参考程度。%0a
host:1503730420=192.168.0.2
author:1502851521=
diff:1502851521:1502851121:=
host:1502851521=192.168.0.2
author:1502851121=
diff:1502851121:1502850861:=5d4%0a%3c !.gypのスケルトン%0a67c66%0a%3c pythonの辞書として記述される。（JSON＋python拡張）%0a---%0a> %0a
host:1502851121=192.168.0.2
author:1502850861=
diff:1502850861:1502850680:=3,66c3%0a%3c メタビルドツール、他のビルドツールのための入力ファイルを作成する。マルチプラットフォームの大きいプロジェクトで使う。XCodeやVisual Studio、Ninjaなどの入力ファイルを作成できる。.gypファイルを読み込む。%0a%3c %0a%3c  [=%0a%3c   {%0a%3c     'variables': {%0a%3c       .%0a%3c       .%0a%3c       .%0a%3c     },%0a%3c     'includes': [%0a%3c       '../build/common.gypi',%0a%3c     ],%0a%3c     'target_defaults': {%0a%3c       .%0a%3c       .%0a%3c       .%0a%3c     },%0a%3c     'targets': [%0a%3c       {%0a%3c         'target_name': 'target_1',%0a%3c           .%0a%3c           .%0a%3c           .%0a%3c       },%0a%3c       {%0a%3c         'target_name': 'target_2',%0a%3c           .%0a%3c           .%0a%3c           .%0a%3c       },%0a%3c     ],%0a%3c     'conditions': [%0a%3c       ['OS=="linux"', {%0a%3c         'targets': [%0a%3c           {%0a%3c             'target_name': 'linux_target_3',%0a%3c               .%0a%3c               .%0a%3c               .%0a%3c           },%0a%3c         ],%0a%3c       }],%0a%3c       ['OS=="win"', {%0a%3c         'targets': [%0a%3c           {%0a%3c             'target_name': 'windows_target_4',%0a%3c               .%0a%3c               .%0a%3c               .%0a%3c           },%0a%3c         ],%0a%3c       }, { # OS != "win"%0a%3c         'targets': [%0a%3c           {%0a%3c             'target_name': 'non_windows_target_5',%0a%3c               .%0a%3c               .%0a%3c               .%0a%3c           },%0a%3c       }],%0a%3c     ],%0a%3c   }%0a%3c  =]%0a%3c %0a---%0a> メタビルドツール、他のビルドツールのための入力ファイルを作成する。マルチプラットフォームの大きいプロジェクトで使う。XCodeやVisual Studio、Ninjaなどの入力ファイルを作成できる。%0a
host:1502850861=192.168.0.2
author:1502850680=
diff:1502850680:1502850680:=1,3d0%0a%3c https://gyp.gsrc.io/%0a%3c %0a%3c メタビルドツール、他のビルドツールのための入力ファイルを作成する。マルチプラットフォームの大きいプロジェクトで使う。XCodeやVisual Studio、Ninjaなどの入力ファイルを作成できる。%0a
host:1502850680=192.168.0.2
