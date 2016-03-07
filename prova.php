<!DOCTYPE html>
<!-- saved from url=(0034)https://developerquiz.appspot.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Provinha de Programação</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
              rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
              rel="stylesheet" type="text/css">
        <script type="text/javascript">
            $(document).ready(function () {
                var str = $('#TextoB').val();
                var res = str.split(" ");
                var i;
                var ContarPreposicoes = 0;
                var ContarVerbos = 0;
                var ContarVerbosPrimeiraPessoa = 0;
                var ContarPalavras = 0;
                var arr = [];
                var arrAux = [];
                var PosUltimaLetra;
                for (i = 0; i < res.length; i++) {
                    ContarPalavras++;
                    if (res[i].length === 3) {
                        arr[i] = res[i][2].match(/v|s|h|z/g);
                        if (arr[i] !== null) {
                            if (arr[i].length > 0) {
                                ContarPreposicoes++;
                            }
                        }
                    }
                    if (res[i].length > 6) {

                        //verbos terminados em foo
                        PosUltimaLetra = res[i].length - 1;
                        arrAux[i] = res[i][PosUltimaLetra].match(/b|v|s|h|z/g);//foo
                        if (arrAux[i] !== null) {
                            if (arrAux[i].length > 0) {
                                ContarVerbos++;
                                //verbo de primeira pessoa que começa com bar
                                arr[i] = res[i][0].match(/b|v|s|h|z/g);//foo
                                if (arr[i] === null) {
                                    ContarVerbosPrimeiraPessoa++;
                                }
                            }
                        }
                    }

                }
                $("#ContarPreposicoes").val(ContarPreposicoes.toString() -1);
                $("#ContarVerbos").val(ContarVerbos.toString());
                $("#ContarVerbosPrimeiraPessoa").val(ContarVerbosPrimeiraPessoa.toString());
            });
        </script>
    </head>
    <body>

        <div id="content">

            <h1>Instruções</h1>
            <p>Responda à provinha preenchendo os campos apropriados dessa página.
                A correção é feita inteiramente por máquina, portanto você
                deve responder <em>exatamente</em>
                ao que se pede, sem colocar nenhum dado adicional, explicação ou
                formatação. Você pode
                (e deve) escrever programas para ajudar a calcular as respostas
                das questões.</p>

            <p>Nas respostas que pedem texto, espaços e tabulações em excesso
                serão desconsideradas, portanto não se preocupe caso você digite
                espaços ou tabulações a mais, mas tome cuidado para não cortar
                ou juntar palavras. Em outras palavras, qualquer número de espaços
                em branco é equivalente a um espaço em branco, e espaços em branco
                no início ou final da resposta não serão considerados.</p>

            <p>Quando uma resposta for um número, por favor utilize a notação
                decimal pura, usando só digitos e sem separadores ou outros caracteres
                embutidos.  Por exemplo, digite <tt>16384</tt> (e
            nunca <tt>16.384</tt> ou <tt>16 384</tt>).</p>

        <p>Atenção ao comprimento máximo de alguns campos e certifique-se 
            de que sua resposta está corretamente representada.</p>

        <p>Esta página <b>não salva respostas</b>, portanto anote as respostas para enviar para vgallafrio@madeinweb.com.br. Caso precise guardar suas respostas
            para continuar a prova posteriormente, você deve fazê-lo por
            conta própria (num arquivo por exemplo).</p>

        <p><b>Importante:</b> os resultados de correção da provinha
            não serão divulgados e não haverá revisão ou vista de provas.</p>

        <h2>Questões</h2>

        <form method="POST">

            <input type="hidden" name="lang" value="pt">
            <input type="hidden" name="posttoken" value="765ee064261557819d6f531db7377bc2">

            <p>Arqueólogos encontraram um pergaminho com os seguintes textos:</p>

            <div class="text">
                <p class="textlabel">Texto A</p>
                <textarea class="text" id="TextoA">gmtm xnvgtlml sgcfmz tmw hbvcst mqnj gxr ltrkckj hzbpvj pgnfkhmd tcmpwnk phvx zpsqdhx bcdzdtmm npfbwlt xlwqbj wndfhdf fqx qpnxnsqk lxrcmgjc xlthlfdl xtdql vtznwg jhwd svshbq fmx hvpcwl srxx rhgjql fgx tjlx xzvcgpr gtg zpv sdp cjngcfv kcjpxdv jkvtpjnk zcjmvrbh lsnn gmlpkw nnsvhtff vlwtdch psbqbl rbptvg vpxmvkv rdgwtmj hjn pgh qkm lqpkj qjgmtrqf cdzbbckk fbhsb rpkdph ldk jxhft hrw tcmrdn vwf jjtrk dcdz xmczpt mfvmrs qqbphnnc hcmfkv bwqvdbzx zlsg bvsbdl mjspk ckdndgv sknrzck qvgnhq tsh nltpbns dcpp sbhstq lbkmzbh jmlwkllv cltww nxkwldm bdwn zlzn vhd zkxh xqlxknx xvwh wxhz bldcwc fqt lfmf mqb plvxk nnxplxl ktbdqfd cpxm lprbg tbq tkmvq ggzgtcfv qggswmr nkz xzg gwnfl wrhs mkwj gpggn gchp pfhl cwzrchv qtmxd xzprwf msrwws bwvf xwzbfq srvk kfqrdc ftqwk msrgfhw fmwm wtfgd pbp clmqlfwh hzzjn rmgbz gjzvfhzg jqgshslr nkflqc bjp rsxfnflp cmwvqjld pqqflg xrzrn xqgdnpw cjfzscq dzndcbm gwzgt fzmlvg gcm dbvcsbcv hdcr njk mlwl xsjbjtzz svt lgc xntlpmr mrjnhmgf swntq tdd qcsfvx jgslgvdf krztn nggpm pjdjrpn zqgrk mcsdh hvclhvk ftm khct znqfpcpw mjsmgssg lsxxhjwh lwcj gvwpbk zkxj rnhdtxgx ftmdzb cpcfhf jnd dqnpqw dwn jskpn qgbcrjzx mdmhtt kbbjthfl tlv lvhqnb ldht mpcxgz hcqgswp nqmkw cpfpdsn dbcbc mvqw vfjrlhj lxs wmglxhgv jbhstvvs bfq dvxlmr mjgjfgv fdrctz spdlgrf xwpcqgb kbqqhwb wkxgklq ddsgvxqx xfrcqt mvwf wdvrlbc hrmn cdxrkczw qlcsjk lqmgwq tjl glkqp zfsft vhfptfg dzkw qglltnd wcccwx bsdb zhddx spfkq swcxvbx qsznpfkr zslthtjv ljrltk vrvpzlfj mhzzrvs tqmndn pstqctwf kpzlgzg gtrq pdwffz dzx ktgnd fdk gwxwwngn lfjxb wbg glkgrs mmphjqf zgxllrxn sjzsttzg gpnlvb fxrct wnjp ntwvtzk xmvzjjs zcb zhkzrl kswskdjh lbtzh qsjh gzldc ftqpqqlw shwl wwdzlsc ztsbw jlfzqbpl bbqtzgrj rmrrgsp sqzk szhvwfw cxdv hwhpsdp drkp vlkzkc rpb kgfdhk lwbwxpzk tgdwwnsj ltcqs zblpzpv bvlp hdsnblpv dbq nlkz tmzjj qdrvhw sjmfn fpg cmmqz grwqhlh gjtbfws nwfxjpq qrk qspx dqhskm zphnxfn gspzcbrx przjqwr kfbh wmvjfwxr gfwb fcwntkz zpf cmcxptrh bqrxn lmppks wznjt dhxjnjlh hqdvpzw lgk qthd stn xwzkkx jvzmv dtp ppq zqbdl smphb kldknq tlrvbxsr zbjs khfhxcx hgfhv hrbbrbbs tggqvh cnvqd pjqxt mcvvw rht dzq ggsxpj mpvxms rbgwkbmc nvlkwzw wgp mwlkvdpq sfbq jtrzxqb xqdq zckjhmkc tsdm cthtzg fsbxxsk spcvh jhtr xphs nmzls fqnws mlnvq xdqlljf tflpsr ccgnwl rtxwqkt hmccs fnrqz lvksdrtr kqvpcvmr nbp kjgh clxzknq vkj qdfljlgp xtfl lpht zzlh mchgww gqwsvzlv zdbh hmgq xfb xcfn dkmkglqd zlvwjfmj dwj xgxdm fzxzmbz rfd lwzqsqsm dwz mnr pwdcwq rrmjdln rcg bfx bqrntz vpbrbg lmfqnw fclpdfh nxvhrh zfmrf wpr wbthbqs qdczwnl ssm dlbdshh fqvgks sssxx lsd cfbmmb dfxd lgq swh ntt vtbwbrc xch jxxq kzq wqcbpr xpk ggdqkp flkc bcng hgggdns dkqmcb zpm bqlqcp mbw fqp rdm zmq kjpgdp kpzcpsf gxtj jznbbfsr brm mwlg vnvdmtks lkpvtsd lmgjgv vqgzvf vjszvcrm svnttdtp fgsz mcjhb kssmc vrkgtpf slnttp qbmclrrd csdcm tqnqm qpvflxtq djhrq jrhwd qcznvsf txfqs sgzvqsnf xlkgwmlm qvxbr lhhb mcmpwjlt lzzrzp lvfqphvj slncfr fvmsqbhq jfkcdfxq wsjwnj clbpgx mjsh ccxvx bfxjbwj hxtmfqm tzpqtcnl ntz hbkg hpfd hzhdsgsc pgqktlpb jhrxc tbfrz hfpcwj sqxx wfdx rxcbt ckkk lmcfxjsn vzzvr zhmxdcxs mfrfftw ddh dpfxhkw hglhk gprmzpb xznlhrq brm jjdnztgs krvn qdr qqrzkdzr mzg fht dcbflwrh skrmqcc cxznmfdx hgpxwqg ngpdnpw tjnl qpc xtk sjg bjkhd frnnn qtjvnjs khnvgql chmrrd gzvn jtgsq clfbtqfm dml grqzx nhq gccjx wsdrk qkghs jhpvmv xnh smxb txzrh tzltk fnxhd rqqp slpzdvk fktc plfp slq szfsmnnr hmtntnn kbdfrh vgfzgqp nkkxlbwj fzlgv dszh bsrt jbnftt cbqgd jqbnd zbrxkrn rrd hzf cqpzvq vrmbzk wdlnhm zltthzp gnxqr qfwxhb bmmm wgnz mxb pztcvkg sdzpsj gsxfrnts jzlzscrz sdnz qpjxlqfk hshhzlhb xzvxsvq wbdgljv kdcgvs wpx qzpqg dxzgs xzbpzq rhkklr zldzwtk jrjfmmrt nvb tfm fnrvwzv bmpzqx pcjqgqcc ztms gcrrtftm wktcg tqggk dvdw cqz rzjjwk tmjh szbzxrz srwcxd rtswgvx wfd rkznd jcqcnnjl sstjg wsjj cdlkmfqx sfcs xgzd bqxs wvxslc rzrd pjbrmt gnxchpn skrfb kbxlz bnv szrvg czsbmn tslqcjtg qkk dmhn vskvskhc mfsgtj gxjgh ltqm tcdck qlgwpwhc lncg xts vlnw dqr zjbr qnbpk qpjmc</textarea>
            </div>

            <div class="text">
                <p class="textlabel">Texto B</p>
                <textarea class="text" id="TextoB">crwfss xqqqkk cbnkfsm lml bpvd xfzx gxdddr cbtng lsphxt rljqhs hfc kgqzcbxm xnglcwh cvkmgxt lgqzqtn kqmrthd vcglhg vzjkf tvvttj qfb zqr tgh ssth drlfzfd sbxrmlwc vwrpgd cfm kjfcfpw pjprz qst kzwt twgmjgww tvjlmgk gxr gksqkpp ldm djbr wsts lcfrgvx dgtnr xnhhgpf nxmcd jnjczv mnhj sjvfbnqt qwtmpzx wbkm wsjj crtbnzbp xsdt gkdrbdx fph bvkg psl hlqztsxr kdsscmwv vktfjk npwmk fkf bcss wsg snwp tbxjvsfm rztcp xddlzvd nfcdktbx txzkhlmj cgf msc sgtpnlg jxfp hzwtfx fmmkt dxphfdq xxl wqkfw dbhsj vlwdtrnv cnc qpj mglz wwxs rlcdn zhwxmncm mlgbms pgjzndvx tghggq fhqwdlm vjk dwpfkrj bqkhk lmjbvcz zkgrsz dkdv mtmx dgxwftxm cggl mznjhlm pqlx zcjgsv kmphtwvd mmbvn kctj kkn kfxh vlkq gqpr tvj wdcjntqq gqqvq mttnq lncrfvsd hvpt kqkmm trjdls kmgv rbvvjlqj hnldkc cbmcggvt xcgk sljvkbl nnnhsjqh sbsmxdlk fjhncdnf xcwg lpswbqzh ffqsx nnskjk pwlfq vdfxj cmzbf vgbls vtdxpkmd snbfn rcjjwdh kjmtpj vlcjn pmwnn wjhr lfl nnrcx plnksk fns ngj fknfr xsbdb lvbh xscbjvzr qtbjmdz jwbsz xvfvpxj wgjvzrq fqhmxvn lswbqdvc qbb vplwj ztdzq kvt ljgv kcgdz qdfs xcw sxtcqwxv vlv kdxzdk gnq gkxvv nmgzcb thn gpkthtc xgcqscj zqvbjtm fdzkl qkgsfnd qldcpk jtpzx sdbhmjsr tch pxg gggmz mdchn svflkdb qxmbcwpk drxrqmqq vpbqpj tjb gzwv ltpbg kddc fcsgh bvn clgx zlj hbmt zdrkwmzr szdtkrnm qzzjftnh fvbj lrntvzd wccx xclgfm bsn jwzh fknlgv rcd cqdvj lhkjmqql cvzkmr sxbvswd qjm xdvdn rsrfqvwg vczx qbjv trhh nxd twfqg sbrzbwdv clbnqz nrcnss kjtv mzcs bsp ttfzswss pkw xfbb ccxrbzl zrfcchsm vpdkl tsmh hxcbtkc tzj gqnrcr dtrbf bpcw dmfdpll fpj tggz njjxcv kfrrpzfr kfpmfsrb znks jpcwwxz msxxbxx nvvclxn vsgjkwz kkbchrps nrvl pvvjd wkgnzc szkl stvhsth smpqrpph ppprhl bzv bpxphx tswc ntd zvfj sshtv hfpqcw tkk jkqkdm fbdgjd zprx xzznvr btvvsj rttlqqkv hck fcqlt ffqsqf hccgv hjcrx hlkxpl nwzkc dcr pwkc gpzzm lvsxxzpc lgc fhnqvrl lcsl wqcqrj mqxzr qclxtsnf dlptthc cgb vmdd tns jmxbf tmch xfgqp bxmmbcd pjswnzr klxszcr vbrbbbf fggs fgx zwp hzh hmn zjrs wwrhxjj hqbgwh svkj frxjfxt crg bspwsh cdnnqmh nnwjbmfr ppr frx xmbnjgz brz jxklffp zbvkm sskdrw jkvjr bzgttxt rmr wkbwjpq qtww zckrbv mhwrcfrn gkscfg pgv rgxd xwrnkcnn drlpbnb kmfxstq hmb sbz wfmz ctcs stbjrb stpr qjw lszzfn wkldsmn fwh gtvtlrbl ckwmvsd flfdj sswczp vkff kvhvx lhgjdj jjghhjvr phh bvgsjn cxxjdhqz bhdqb lrbltq lwqdc dvrcv bbdvjcwb xfthjc wdcbxdlv zdvlpwmg fgqx hrl pzvgpks vzlgtst lnlgzqrm kkk dqvkbng xrplsln ckcthgxp jqgk tclkxs sfmnq hxsncgm qsj rlshbh njtnsghw gjs gflhwp mnqk mpnn hzmkcffq cqrjf bztjpj dsflvwrw kkrb tqgxmhcb wtzf wtbflncz lzwqzjdf ppnwgrbx clfwxhck ggw ptwpcpsj rrkpm bjk wdxxl ssvb bbqxs mblwgfw jkdh nrsqbp jdfvhvkk rnqthfb nznxtxsw vpfxlng wlxnssl jlp drclznbj fngnktq gxbvpz xhhkssb gkgl bgwvnm vthxc mxrjtpc rsj zdmhr zpgcwfh wxvzjc rvmqft kdhttxkv mdbjnszw cmxlwtn nknvkl hll bztjcmbd tbt jxsh mkxlkcq htqcmg mdhj rlw tlksbbgl trgqrmjv ngzrsj sjbzx znwcl qkmkwkd wxzxn ztfhgtj lspzp cmr jcbtj smcwp lvzqkg jjbrrjwb ffhvl zkmhhv rcdx jqjxfw lfcrqzst tmwdcmc zzqfgsrj bqhhhctp hxvdjb qzldwqc flmdt xjpxkp zmsjmtzp zlxhs rcdcmpn mrlvl mqztrz fngt xwmfhw thvjtmv rthss shnkdb pgspmlzp jrfvjr zwcns pbxrdfm svbbtm zmzngv vfqbkzx bvpngg dfrd bbntjn lvs ndbfln vvscmftx bmncplpz fbbn qvplcg wbfprq rrsvg qzd gmplsw hbqpzpj kbgkwtnb rmvbtlzs pgcsg vhl xwxdtbmr lvfl mnsvrx vxwlr sddqhwg tcnbcbk rtsvnxnk lbmksng lnsjkmvg mkfsqlzd rkklplsx vzgjf vpbj rpzfj znzmvvd zlcvhlq wsbkt dmswb fmd scrb wzx pkzp zrn mpvbjhq ndlzhf sgnz whs wcthf qmvxb lbklnx jdfr xwbfh kpmhg crw htmvzh tfqsqg rbq cdfczv flfnrvr wtksf dfmt vgkwzmvg tcczzqzg mdvzxsv dkd mqkgvgb gbx lwnp znr hjhq zhbtrwjp whwttmwk vxrmwql mvjnrfz hzgvqpwh glcws fbnf lfg qvtmx pfj gbjbhz fvskb dlqz jkrzvh gmpvnt qwtqd hxhpmj gsqs xrjpnzn tnfqcbz nqgr fvgw vprsbx dptkrnp zwk gspzkx mzkrtlk ffk vkpzx vkcwqc ztnkb sxmfzjdv jjhzq mwlf pjzgb cklbjwx xvv vcpdjxrg vht wsk swx qdgmgbqq ppgmrxlf pzzz ttx wnqclqv sgzzlz mbdcmhnc pnrxpn zwcgq gsgmtjb mkp zrrhwzms hclm bfmvwj ldwlslsb tgjnch kplk</textarea>
            </div>



            <p>Esses pergaminhos estão no antigo e misterioso idioma Madeguês.
                Após muitos anos de estudo, os linguistas já conhecem algumas
                características desse idioma.</p>

            <p>Primeiramente, as letras Madeguês são classificadas em dois grupos:
                as letras <b>b</b>, <b>v</b>, <b>s</b>,
                <b>h</b> e <b>z</b> são chamadas <b>"letras tipo 
                    <em>foo</em>"</b>, enquanto que as demais são conhecidas como <b>"letras tipo
                    <em>bar</em>"</b>.</p>

            <p>Os linguistas descobriram que as preposições em Madeguês são as palavras de
                3 letras que terminam numa letra tipo 
                <em>foo</em>, mas onde não ocorre a letra 
                <b>b</b>. Portanto, é fácil ver que 
                existem 14
                preposições no Texto A. E no Texto B, quantas preposições existem?</p>

            <p class="answer">
                <b>Resposta:</b> Existem 
                <input class="smalltextbox" type="text" name="answer_prepcount" id="ContarPreposicoes" maxlength="8"> 
                preposições no Texto B.</p>

            <p>Um outro fato interessante descoberto pelos linguistas é que,
                no Madeguês, os verbos sempre são palavras de 7 ou mais 
                letras que terminam numa letra tipo <em>foo</em>. Além
                disso, se um verbo começa com uma letra tipo <em>bar</em>,
                o verbo está em primeira pessoa.</p>

            <p>Assim, lendo o Texto A, é possível identificar 52
                verbos no texto, dos quais 40 estão em
                primeira pessoa.</p>

            <p>Já no Texto B, quantos são os verbos?</p>

            <p class="answer"><b>Resposta:</b> Há
                <input class="smalltextbox" type="text" name="answer_verbcount" id="ContarVerbos" maxlength="8"> verbos no Texto B.</p>

            <p>E quantos verbos do Texto B estão em primeira pessoa?</p>

            <p class="answer"><b>Resposta:</b> Há
                <input class="smalltextbox" type="text" name="answer_verb_1stp_count" id="ContarVerbosPrimeiraPessoa" maxlength="8"> verbos em primeira pessoa no Texto B.</p>

            <p>Um professor universitário utilizará os textos A e B para
                ensinar o Madeguês aos alunos. Para ajudar os alunos a compreender
                o texto, esse professor precisa criar uma <b>lista de vocabulário</b>
                para cada texto, isto é, uma lista ordenada (e sem repetições) das palavras
                que aparecem em cada um dos textos.</p>

            <p>Essas listas devem estar ordenadas e não podem conter repetições
                de palavras. No Madeguês, assim como no nosso alfabeto, as palavras são
                ordenadas lexicograficamente, mas o problema é que no Madeguês, a ordem 
                das letras no alfabeto é diferente da nossa. O alfabeto Madeguês, em
                ordem, é: <tt>jngmclqskrzfvbwpxdht</tt>. Assim, ao fazer essas
            listas, o professor deve respeitar a ordem alfabética Madeguês.</p>

            <p>O professor preparou a lista de vocabulário para o Texto A:</p>

            <div class="text">
                <p class="textlabel">Lista de vocabulário do Texto A</p>
                <textarea class="text" id="VocabA">jjdnztgs jjtrk jnd jgslgvdf jmlwkllv jcqcnnjl jlfzqbpl jqgshslr jqbnd jskpn jkvtpjnk jrjfmmrt jrhwd jznbbfsr jzlzscrz jfkcdfxq jvzmv jbnftt jbhstvvs jxxq jxhft jhrxc jhwd jhpvmv jhtr jtgsq jtrzxqb njk nnsvhtff nnxplxl nggpm ngpdnpw nmzls nlkz nltpbns nqmkw nkkxlbwj nkz nkflqc nvlkwzw nvb nbp nwfxjpq npfbwlt nxkwldm nxvhrh nhq ntz ntwvtzk ntt gjzvfhzg gjtbfws gnxchpn gnxqr ggsxpj ggzgtcfv ggdqkp gmlpkw gmtm gcm gccjx gcrrtftm gchp glkgrs glkqp gqwsvzlv gspzcbrx gsxfrnts grqzx grwqhlh gzldc gzvn gfwb gvwpbk gwnfl gwzgt gwxwwngn gpnlvb gpggn gprmzpb gxjgh gxr gxtj gtg gtrq mjgjfgv mjsmgssg mjspk mjsh mnr mmphjqf mcjhb mcmpwjlt mcsdh mcvvw mchgww mlnvq mlwl mqnj mqb msrgfhw msrwws mkwj mrjnhmgf mzg mfsgtj mfrfftw mfvmrs mvqw mvwf mbw mwlg mwlkvdpq mpcxgz mpvxms mxb mdmhtt mhzzrvs cjngcfv cjfzscq cnvqd cmmqz cmcxptrh cmwvqjld ccgnwl ccxvx clmqlfwh clfbtqfm clbpgx clxzknq cltww cqz cqpzvq csdcm ckkk ckdndgv czsbmn cfbmmb cbqgd cwzrchv cpcfhf cpfpdsn cpxm cxznmfdx cxdv cdlkmfqx cdzbbckk cdxrkczw chmrrd cthtzg ljrltk lncg lgc lgq lgk lmgjgv lmcfxjsn lmfqnw lmppks lqmgwq lqpkj lsnn lsxxhjwh lsd lkpvtsd lzzrzp lfjxb lfmf lvksdrtr lvfqphvj lvhqnb lbkmzbh lbtzh lwcj lwzqsqsm lwbwxpzk lprbg lpht lxs lxrcmgjc ldk ldht lhhb ltcqs ltqm ltrkckj qjgmtrqf qnbpk qggswmr qglltnd qgbcrjzx qcsfvx qcznvsf qlgwpwhc qlcsjk qqrzkdzr qqbphnnc qsjh qsznpfkr qspx qkghs qkm qkk qrk qzpqg qfwxhb qvgnhq qvxbr qbmclrrd qpjmc qpjxlqfk qpnxnsqk qpc qpvflxtq qdczwnl qdr qdrvhw qdfljlgp qtjvnjs qtmxd qthd sjg sjmfn sjzsttzg sgcfmz sgzvqsnf smphb smxb slncfr slnttp slq slpzdvk sqzk sqxx ssm sssxx sstjg sknrzck skrmqcc skrfb srvk srwcxd srxx szrvg szfsmnnr szbzxrz szhvwfw sfcs sfbq svnttdtp svshbq svt sbhstq swntq swcxvbx swh spcvh spfkq spdlgrf sdnz sdzpsj sdp shwl stn kjgh kjpgdp kgfdhk kcjpxdv kldknq kqvpcvmr kssmc kswskdjh krztn krvn kzq kfqrdc kfbh kbqqhwb kbbjthfl kbxlz kbdfrh kpzcpsf kpzlgzg kdcgvs khnvgql khct khfhxcx ktgnd ktbdqfd rnhdtxgx rmgbz rmrrgsp rcg rqqp rsxfnflp rkznd rrmjdln rrd rzjjwk rzrd rfd rbgwkbmc rbptvg rpkdph rpb rxcbt rdgwtmj rdm rhgjql rhkklr rht rtswgvx rtxwqkt zjbr znqfpcpw zgxllrxn zmq zcjmvrbh zckjhmkc zcb zlsg zlzn zlvwjfmj zldzwtk zltthzp zqgrk zqbdl zslthtjv zkxj zkxh zzlh zfmrf zfsft zbjs zblpzpv zbrxkrn zpm zpsqdhx zpf zpv zphnxfn zdbh zhmxdcxs zhkzrl zhddx ztms ztsbw fnrqz fnrvwzv fnxhd fgsz fgx fmwm fmx fclpdfh fcwntkz flkc fqnws fqvgks fqp fqx fqt fsbxxsk fktc frnnn fzmlvg fzlgv fzxzmbz fvmsqbhq fbhsb fpg fxrct fdk fdrctz fht ftm ftmdzb ftqwk ftqpqqlw vjszvcrm vnvdmtks vgfzgqp vlnw vlkzkc vlwtdch vqgzvf vskvskhc vkj vrmbzk vrkgtpf vrvpzlfj vzzvr vfjrlhj vwf vpbrbg vpxmvkv vhfptfg vhd vtznwg vtbwbrc bjkhd bjp bnv bmmm bmpzqx bcng bcdzdtmm bldcwc bqlqcp bqrntz bqrxn bqxs bsrt bsdb brm bfq bfx bfxjbwj bvlp bvsbdl bbqtzgrj bwqvdbzx bwvf bdwn wnjp wndfhdf wgnz wgp wmglxhgv wmvjfwxr wcccwx wqcbpr wsjj wsjwnj wsdrk wkxgklq wktcg wrhs wznjt wfd wfdx wvxslc wbg wbdgljv wbthbqs wwdzlsc wpr wpx wxhz wdlnhm wdvrlbc wtfgd pjqxt pjbrmt pjdjrpn pgnfkhmd pgqktlpb pgh pcjqgqcc plfp plvxk pqqflg psbqbl pstqctwf przjqwr pztcvkg pfhl pbp pwdcwq ppq pdwffz phvx xnvgtlml xnh xntlpmr xgzd xgxdm xmczpt xmvzjjs xcfn xch xlkgwmlm xlwqbj xlthlfdl xqgdnpw xqlxknx xqdq xsjbjtzz xrzrn xznlhrq xzg xzvcgpr xzvxsvq xzbpzq xzprwf xfrcqt xfb xvwh xwzkkx xwzbfq xwpcqgb xpk xphs xdqlljf xts xtk xtfl xtdql djhrq dml dmhn dcbflwrh dcpp dcdz dlbdshh dqnpqw dqr dqhskm dszh dkmkglqd dkqmcb drkp dzndcbm dzq dzkw dzx dfxd dvxlmr dvdw dbcbc dbq dbvcsbcv dwj dwn dwz dpfxhkw dxzgs ddsgvxqx ddh dhxjnjlh dtp hjn hgggdns hglhk hgfhv hgpxwqg hmgq hmccs hmtntnn hcmfkv hcqgswp hqdvpzw hshhzlhb hrmn hrbbrbbs hrw hzzjn hzf hzbpvj hzhdsgsc hfpcwj hvclhvk hvpcwl hbkg hbvcst hwhpsdp hpfd hxtmfqm hdcr hdsnblpv tjnl tjl tjlx tggqvh tgdwwnsj tmjh tmzjj tmw tcmrdn tcmpwnk tcdck tlrvbxsr tlv tqnqm tqggk tqmndn tslqcjtg tsdm tsh tkmvq tzltk tzpqtcnl tfm tflpsr tbq tbfrz txzrh txfqs tdd </textarea>
            </div>

            <p>Como seria a lista de vocabulário do Texto B?</p>
            <?php
            $TextoB = "crwfss xqqqkk cbnkfsm lml bpvd xfzx gxdddr cbtng lsphxt rljqhs hfc kgqzcbxm xnglcwh cvkmgxt lgqzqtn kqmrthd vcglhg vzjkf tvvttj qfb zqr tgh ssth drlfzfd sbxrmlwc vwrpgd cfm kjfcfpw pjprz qst kzwt twgmjgww tvjlmgk gxr gksqkpp ldm djbr wsts lcfrgvx dgtnr xnhhgpf nxmcd jnjczv mnhj sjvfbnqt qwtmpzx wbkm wsjj crtbnzbp xsdt gkdrbdx fph bvkg psl hlqztsxr kdsscmwv vktfjk npwmk fkf bcss wsg snwp tbxjvsfm rztcp xddlzvd nfcdktbx txzkhlmj cgf msc sgtpnlg jxfp hzwtfx fmmkt dxphfdq xxl wqkfw dbhsj vlwdtrnv cnc qpj mglz wwxs rlcdn zhwxmncm mlgbms pgjzndvx tghggq fhqwdlm vjk dwpfkrj bqkhk lmjbvcz zkgrsz dkdv mtmx dgxwftxm cggl mznjhlm pqlx zcjgsv kmphtwvd mmbvn kctj kkn kfxh vlkq gqpr tvj wdcjntqq gqqvq mttnq lncrfvsd hvpt kqkmm trjdls kmgv rbvvjlqj hnldkc cbmcggvt xcgk sljvkbl nnnhsjqh sbsmxdlk fjhncdnf xcwg lpswbqzh ffqsx nnskjk pwlfq vdfxj cmzbf vgbls vtdxpkmd snbfn rcjjwdh kjmtpj vlcjn pmwnn wjhr lfl nnrcx plnksk fns ngj fknfr xsbdb lvbh xscbjvzr qtbjmdz jwbsz xvfvpxj wgjvzrq fqhmxvn lswbqdvc qbb vplwj ztdzq kvt ljgv kcgdz qdfs xcw sxtcqwxv vlv kdxzdk gnq gkxvv nmgzcb thn gpkthtc xgcqscj zqvbjtm fdzkl qkgsfnd qldcpk jtpzx sdbhmjsr tch pxg gggmz mdchn svflkdb qxmbcwpk drxrqmqq vpbqpj tjb gzwv ltpbg kddc fcsgh bvn clgx zlj hbmt zdrkwmzr szdtkrnm qzzjftnh fvbj lrntvzd wccx xclgfm bsn jwzh fknlgv rcd cqdvj lhkjmqql cvzkmr sxbvswd qjm xdvdn rsrfqvwg vczx qbjv trhh nxd twfqg sbrzbwdv clbnqz nrcnss kjtv mzcs bsp ttfzswss pkw xfbb ccxrbzl zrfcchsm vpdkl tsmh hxcbtkc tzj gqnrcr dtrbf bpcw dmfdpll fpj tggz njjxcv kfrrpzfr kfpmfsrb znks jpcwwxz msxxbxx nvvclxn vsgjkwz kkbchrps nrvl pvvjd wkgnzc szkl stvhsth smpqrpph ppprhl bzv bpxphx tswc ntd zvfj sshtv hfpqcw tkk jkqkdm fbdgjd zprx xzznvr btvvsj rttlqqkv hck fcqlt ffqsqf hccgv hjcrx hlkxpl nwzkc dcr pwkc gpzzm lvsxxzpc lgc fhnqvrl lcsl wqcqrj mqxzr qclxtsnf dlptthc cgb vmdd tns jmxbf tmch xfgqp bxmmbcd pjswnzr klxszcr vbrbbbf fggs fgx zwp hzh hmn zjrs wwrhxjj hqbgwh svkj frxjfxt crg bspwsh cdnnqmh nnwjbmfr ppr frx xmbnjgz brz jxklffp zbvkm sskdrw jkvjr bzgttxt rmr wkbwjpq qtww zckrbv mhwrcfrn gkscfg pgv rgxd xwrnkcnn drlpbnb kmfxstq hmb sbz wfmz ctcs stbjrb stpr qjw lszzfn wkldsmn fwh gtvtlrbl ckwmvsd flfdj sswczp vkff kvhvx lhgjdj jjghhjvr phh bvgsjn cxxjdhqz bhdqb lrbltq lwqdc dvrcv bbdvjcwb xfthjc wdcbxdlv zdvlpwmg fgqx hrl pzvgpks vzlgtst lnlgzqrm kkk dqvkbng xrplsln ckcthgxp jqgk tclkxs sfmnq hxsncgm qsj rlshbh njtnsghw gjs gflhwp mnqk mpnn hzmkcffq cqrjf bztjpj dsflvwrw kkrb tqgxmhcb wtzf wtbflncz lzwqzjdf ppnwgrbx clfwxhck ggw ptwpcpsj rrkpm bjk wdxxl ssvb bbqxs mblwgfw jkdh nrsqbp jdfvhvkk rnqthfb nznxtxsw vpfxlng wlxnssl jlp drclznbj fngnktq gxbvpz xhhkssb gkgl bgwvnm vthxc mxrjtpc rsj zdmhr zpgcwfh wxvzjc rvmqft kdhttxkv mdbjnszw cmxlwtn nknvkl hll bztjcmbd tbt jxsh mkxlkcq htqcmg mdhj rlw tlksbbgl trgqrmjv ngzrsj sjbzx znwcl qkmkwkd wxzxn ztfhgtj lspzp cmr jcbtj smcwp lvzqkg jjbrrjwb ffhvl zkmhhv rcdx jqjxfw lfcrqzst tmwdcmc zzqfgsrj bqhhhctp hxvdjb qzldwqc flmdt xjpxkp zmsjmtzp zlxhs rcdcmpn mrlvl mqztrz fngt xwmfhw thvjtmv rthss shnkdb pgspmlzp jrfvjr zwcns pbxrdfm svbbtm zmzngv vfqbkzx bvpngg dfrd bbntjn lvs ndbfln vvscmftx bmncplpz fbbn qvplcg wbfprq rrsvg qzd gmplsw hbqpzpj kbgkwtnb rmvbtlzs pgcsg vhl xwxdtbmr lvfl mnsvrx vxwlr sddqhwg tcnbcbk rtsvnxnk lbmksng lnsjkmvg mkfsqlzd rkklplsx vzgjf vpbj rpzfj znzmvvd zlcvhlq wsbkt dmswb fmd scrb wzx pkzp zrn mpvbjhq ndlzhf sgnz whs wcthf qmvxb lbklnx jdfr xwbfh kpmhg crw htmvzh tfqsqg rbq cdfczv flfnrvr wtksf dfmt vgkwzmvg tcczzqzg mdvzxsv dkd mqkgvgb gbx lwnp znr hjhq zhbtrwjp whwttmwk vxrmwql mvjnrfz hzgvqpwh glcws fbnf lfg qvtmx pfj gbjbhz fvskb dlqz jkrzvh gmpvnt qwtqd hxhpmj gsqs xrjpnzn tnfqcbz nqgr fvgw vprsbx dptkrnp zwk gspzkx mzkrtlk ffk vkpzx vkcwqc ztnkb sxmfzjdv jjhzq mwlf pjzgb cklbjwx xvv vcpdjxrg vht wsk swx qdgmgbqq ppgmrxlf pzzz ttx wnqclqv sgzzlz mbdcmhnc pnrxpn zwcgq gsgmtjb mkp zrrhwzms hclm bfmvwj ldwlslsb tgjnch kplk";
            $Lista = explode(" ", $TextoB);
            $Ordem = ['j', 'n', 'g', 'm', 'c', 'l', 'q', 's', 'k', 'r', 'z', 'f', 'v', 'b', 'w', 'p', 'x', 'd', 'h', 't'];
            $OrdemNumerica = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];
            $Ordenar = str_replace($Ordem, $OrdemNumerica, $Lista);
            foreach ($Lista as $key => $value) {
                $OrdenarPalavra["$value"] = $Ordenar[$key];
            }
            asort($OrdenarPalavra, SORT_STRING);
//            echo "<pre>";
//            print_r($OrdenarPalavra);
//            echo "</pre>";
            ?>
            <div class="answertext">
                <p class="textlabel">Lista de vocabulário do Texto B</p>
                <textarea class="answertext" name="answer_sort"><?php
                    foreach ($OrdenarPalavra as $key => $value) {
                        echo $key . ", ";
                    }
                    ?></textarea>
            </div>


            <p>Mas como os Madeguês escrevem números? Bem, no Madeguês, as palavras
                também são números dados em base 20, onde cada letra é um dígito, e os
                dígitos são ordenados do <em>menos</em> significativo para o
                <em>mais</em> significativo (o inverso do nosso sistema). Ou seja,
                a primeira posição é a unidade, a segunda posição vale 20, 
                a terceira vale 400, e assim por diante. Os valores
                das letras são dados pela ordem em que elas aparecem no alfabeto
                Madeguês (que é diferente da nossa ordem, como vimos acima). Ou
                seja, a primeira letra do alfabeto Madeguês representa o dígito 0,
                a segunda representa o dígito 1, e assim por diante.</p>

            <p>Por exemplo, a palavra <tt>gmtm</tt>
            tem o valor numérico de <tt>31662</tt>.

        </p><p><em>OBS: os números nesse problema podem ser grandes, então se 
            você está usando um tipo de dados de tamanho limitado, tenha cuidado com
            possíveis overflows.</em></p>

    <p>Os Madeguês consideram um número bonito se ele satizfaz essas
        duas propriedades:
    </p><ul>
        <li>é maior ou igual a 787808</li>
        <li>é divisível por 3</li>
    </ul>
    <p></p>

    <p>Ao consideramos o Texto A como uma lista de números (isto é, interpretando
        cada palavra como um número usando a convenção explicada acima),
        notamos que existem 131 números
        bonitos <em>distintos</em>.</p>

    <p>E no Texto B, quantos números bonitos <em>distintos</em> existem?</p>
    <?php
    $Ordem = ['j', 'n', 'g', 'm', 'c', 'l', 'q', 's', 'k', 'r', 'z', 'f', 'v', 'b', 'w', 'p', 'x', 'd', 'h', 't'];
    $OrdemNumerica = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19];
    $Ordenar = str_replace($Ordem, $OrdemNumerica, $Lista);
    foreach ($Lista as $key => $value) {
        $Numeral["$value"] = $Ordenar[$key];
    }

    $NumeroBonito = 0;
    foreach ($Numeral as $key => $value) {
        $NumeralMadegues["$value"] = base_convert($value, 20, 10);
        if ($NumeralMadegues["$value"] > 787807) {
            if ($NumeralMadegues["$value"] % 3 == 0) {
                $NumeroBonito++;
            }
        }
    }
    ?>
    <p class="answer"><b>Resposta:</b> No Texto B, há
        <input class="smalltextbox" type="text" name="answer_numbers" maxlength="8" value="<?php echo $NumeroBonito; ?>">
        números bonitos <em>distintos</em> (atenção!).</p>

    <h2>&nbsp;</h2>
</form>
</div>
</body></html>