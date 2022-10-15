@extends('layouts.app')

@section('title', 'Our Mission - गरीबी मिटाओ अभियान संगठन')

@section('style')
    <style>
        .blog-footer {
            padding: 2.5rem 0;
            color: #999;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }
    </style>
@endsection

@section('content')
    <main role="main" class="container mb-5">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    From the Garibi Mitao
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">हमारा लक्ष्य एवं उद्देश्य</h2>
                    <p class="blog-post-meta">July 11, 2020 by <a href="#">Shyam Prasad</a></p>

                    <p>गरीबी मिटाओ अभियान संगठन एक रजिस्टर्ड संगठन/ट्रस्ट है जिसके मुख्य उद्देश्य है :- </p>
                    <ol>
                        <li>भारतीय संविधान के मंशा के अनुसार सच्चे अर्थों में देश में समाजवादी व्यवस्था कायम कराने तथा देश के गरीबों को गरीबी से मुक्ति दिलाने हेतु कार्य करना। </li>
                        <li>भ्रष्टाचार के खिलाफ आम जनता को जागरुक करना तथा भ्रष्टाचारियों के खिलाफ कानूनी कार्यवाही हेतु पहल करना। </li>
                    </ol>

                    <hr>
                    <p><strong>भारत को स्थायी रुप से गरीबी मुक्त देश बनाने के लिए निम्नलिखित पांच कानून बनाना अनिवार्य है।</strong></p>
                    <ol>
                        <li>देश में अनिवार्य रोजगार नीति लागू करना। </li>
                        <li>अनिवार्य जनसंख्या नियंत्रण कानून। </li>
                        <li>कृषि को उद्योग का दर्जा देना। </li>
                        <li>देश में अनिवार्य व समान शिक्षा नीति लागू हो। </li>
                        <li>सभी के लिए निःशुल्क स्वास्थ्य सुविधा उपलब्ध कराना। </li>
                    </ol>
                    <p>यदि आप सहमत हैं तो सहयोगी सदस्य बनने के लिए दिए गये लिंक पर <a class="text-warning" href="{{'index.php'}}">क्लिक करें।</a></p>

                    <br>
                    <h3>देश में अनिवार्य रोजगार नीति लागू करना:</h3>
                    <p>
                        आज देश की सबसे गम्भीर समस्या गरीबी व बेरोजगारी है। बेरोजगारों की फौज लगातार बढ़ती जा रही है। बहुत सारी नौकरियां जा रही हैं तथा
                        उद्योग धंधे बन्द हो रहे हैं जो कि देश के लिए एक गम्भीर समस्या है। जब देश के सभी लोगों को रोटी, कपड़ा, मकान, शिक्षा, स्वास्थ्य व
                        मिलेगा तभी देश पूर्ण रुप से खुशहाल तथा विकासशील देश होगा। इसलिए अब देश में अनिवार्य रोजगार नीति बनना अतिआवश्यक हो
                        गया है जिसमें निम्नलिखित प्रावधान हो:
                    </p>
                    <ol>
                        <li>सभी लोगों को सुरक्षित रोजगार मिले। </li>
                        <li>स्वरोजगार हेतु बैंकों से न्यूनतम ब्याज दर पर सरल व सुलभ लोन उपलब्ध हो। </li>
                        <li>अगर सरकार रोजगार देने में असफल होती है तो योग्यता के अनुसार बेरोजगारी भत्ता देना सुनिश्चित हो। न्यूनतम राशि ऐसा हो कि एक
                            बेरोजगार युवक व युवतियां आसानी से अपना खर्च वहन कर सकें।</li>
                    </ol>

                    <br>
                    <h3>अनिवार्य जनसंख्या नियंत्रण कानून: </h3>
                    <p>
                        देश में गरीबी व बेरोजगारी का सबसे बड़ा कारण अनियंत्रित जनसँख्या वृद्धि है। इसके लिए कठोर कानून बनाना अतिआवश्यक है।
                        भारत में वर्तमान में लगभग 136 करोड़ जनसंख्या है और आज गरीबी व बेरोजगारी चरम पर है। जनसंख्या इतनी तेजी से बढ़ रही है कि अगर हम 2
                        करोड़ लोगों को घर देने की योजना पर काम करेंगे और जब तक घर देंगे तब तक 10 करोड़ लोग बेघर की कतार में होंगे।
                    </p>
                    <p>
                        देश में मौजूदा जल, जंगल, जमीन, रोटी, कपड़ा, मकान, गरीबी और बेरोजगारी के पीछे जनसंख्या विस्फोट का ही हाथ है। बढ़ती हुई
                        जनसंख्या को नियंत्रण करने के लिए सभी जनता को जागरुक करना होगा तथा देश में एक कठोर जनसंख्या नियंत्रण कानून बनाना होगा।
                        कानून बनने के बाद जिस दिन से कानून लागू हो उसके दश माह बाद अगर कोई दो बच्चे से ज्यादा बच्चा पैदा करता है या हम दो हमारे दो
                        नियम का उल्लंघन करता है तो उसे सरकार द्वारा मिलने वाला मदद तथा सुविधाओं जैसे राशन, पेंशन, सब्सिडी इत्यादि
                        से पूर्ण रुप से वंचित किया जाए तथा आर्थिक दण्ड का भी प्रावधान किया जाये।
                    </p>

                    <br>
                    <h3>कृषि को उद्योग का दर्जा देना: </h3>
                    <p>
                        कृषि को उद्योग का दर्जा देने से मिटेगी गांव के लोगों की गरीबी मिटेगी। यदि कृषि को उद्योग का दर्जा दे दिया जाय तो निवेशक खेती में निवेश
                        करेंगे इससे किसानों की हालत सुधरेगी। कर्ज माफी से किसानों को कभी लाभ होने वाला नही है। किसानों की खेती का लागत कम कर इसे मुनाफे
                        का धंधा बनाया जा सकता है। इसके लिए उन्हे खेती से जुड़ी हर चीज समय पर मुहैया कराना होगा। कर्जमाफी से किसानों में कर्ज चुकाने की
                        अनुचित प्रवृत्ति बढ़ती जा रही है। इससे बैंको की वसूली तो प्रभावित हुई ही है, बैंको का एनपीए भी बढ़ता रहा है।
                    </p>
                    <p>
                        कृषि के समस्त कार्य एक उद्योग की तरह हैं। लगातार पूंजी निवेश, अन्न उत्पादन आदि समस्त क्रियांए उद्योग की भांति होती है। समर्थन मूल्य भी
                        मजबूरी में ही सरकारों द्वारा जारी किये जाते हैं। कृषक और कृषि असंगठित क्षेत्र है इसलिए उद्योग की तरह अपने मुल्य का निर्धारण नहीं कर
                        पाता। लागत बढ़ती जाती है जिससे शुद्ध लाभ बहुत कम हो जाती है। कीमतो का निर्धारण आय और व्यय के आधार पर किया जाता है परन्तु
                        कृषि में ऐसा नहीं हो रहा है। यहां किसान फसल बो तो सकता है पर उनकी कीमत उद्योग की तरह स्वयं निर्धारित नहीं कर सकता।
                    </p>
                    <p>
                        कृषि के अन्तर्गत लागत अधिक और आय कम होने के कारण किसानों का जीवन यापन तक कठीन है। देश भर में किसानों के द्वारा आत्महत्या
                        की घटनाएं भी प्रकाश में आती रहती हैं। कृषि को लाभकारी व्यवसाय बनाना किसानो के लिए तो जरुरी है ही समस्त देश के विकास व अनाज
                        उपलब्धता के लिए भी आवश्यक ही नही अपितु अनिवार्य भी है।
                    </p>
                    <p>
                        कृषि हेतु एक उद्योग की तरह लोन भी बैंको से स्वीकृत नही हो सकता। कृषि को बैंक स्वयं एक घाटे का क्षेत्र मानता है परन्तु दोनो स्थितियों
                        में किसानों को मुक्ति मिल सकती है यदि कृषि को उद्योग का दर्जा दे दिया जाय
                    </p>


                    <br>
                    <h3>देश में अनिवार्य व समान शिक्षा नीति लागू हो: </h3>
                    <p>
                        भारत एक समाजवादी देश है, भारत में रहने वाले सभी लोंगो को समान अधिकार है तो फिर अलग अलग शिक्षा क्यों दी जा रही है जिसके कारण
                        असमानता बढ़ती जा रही है। अमीर और अमीर होता जा रहा है, गरीब और गरीब होता जा रहा है। इसलिए पूरे देश में एक शिक्षा नीति कानून
                        होना चाहिए जिसमें निम्नलिखित प्रावधान हो।
                    </p>
                    <ol>
                        <li>सभी के लिए एक समान शिक्षा नीति हो अर्थात एक बोर्ड हो। </li>
                        <li>12वीं तक की शिक्षा पूरी तरह मुफ्त होनी चाहिये और इसमें ऐसा प्रावधान हो कि अगर कोई बच्चा गरीब परिवार में जन्म लेता है तो भी प
                            ्रतिभाशाली बनकर देश की किसी भी स्कूल में निःशुल्क पढ़ सकता है क्योकि हर भारतवासी का शिक्षा लेना मौलिक अधिकार है।</li>
                        <li>शिक्षा ऐसी हो जिससे शिक्षित व्यक्ति को नौकरी/रोजगार पाने में कोई कठिनाई न हो, यानी शिक्षा रोजगारपरक हो।</li>
                    </ol>

                    <br>
                    <h3>सभी के लिए निःशुल्क स्वास्थ्य सुविधा उपलब्ध कराना: </h3>
                    <p>
                        देश में एक बड़ा वर्ग स्वास्थ्य समस्याओ से जूझ रहा हैं। वो किसी न किसी बीमारी से पीड़ित हैं। सरकार द्वारा पूरे देश में स्वच्छता अभियान चलाया जा रहा है
                        यह एक अच्छी पहल है लेकिन यह पूरी तरह जमीन पर नहीं दिख रहा। जरुरत है सेक्टरवाइज जिम्मेवारी देकर स्वास्थ्य व सफाई के प्रति
                        जागरुकता अभियान लगातार चलाया जाय। आज बिमारियों के इलाज के लिए देश में जो व्यवस्था है अमीर व गरीब के लिए अलग अलग हैं।
                    </p>
                    <p>
                        गरीब व्यक्ति को जब कोई बीमारी होती है तो वह सरकारी या झोलाछाप डाक्टर के पास इलाज के लिए जाता है क्योंकि उसके पास पैसे नहीं हैं।
                        सरकारी स्वास्थ्य सेवाओं और अस्पतालों की स्थिति दयनीय है। आधारभूत सुविधाओ का घोर आभाव है।
                    </p>
                    <p>
                        अगर वह सरकारी अस्पताल में जाता है तो डाक्टर जो दवाइयां लिखते हैं वह पैसे के अभाव में पूरा इलाज नहीं कर पाता। इसलिए देश में ऐसी
                        कानून बने कि कोई भी नागरिक अगर बीमार होता है तो बीमारी के अनुसार देश के किसी भी अस्पताल में जाकर अपना इलाज करा सके तथा
                        किसी भी तरह का जांच, दवा व इलाज का पैसा न देना हो। इस तरह से पूरे देश में निःशुल्क स्वास्थय सुविधा उपलब्ध हो।
                    </p>

                    <br><br>
                    <h3 class="text-primary">संगठन के संस्थापक के बारे में:</h3>
                    <p>
                        गरीबी मिटाओ अभियान संगठन की स्थापना पूर्व सैनिक श्याम प्रसाद कुशवाहा (समाजसेवी) के द्वारा वर्ष 2015 में की गयी।
                        श्याम प्रसाद का जन्म भोजपुर जिले में निर्धन व् गरीब परिवार में हुयी। शिक्षा ग्रहण करने के बाद ये भारतीय सेना में भर्ती हो गए।
                        सेना से वापस आने के बाद इन्होने समाज सेवा का कार्य शुरू किया।
                    </p>
                    <p>
                        वर्ष 2014 में श्याम प्रसाद की सोंच दुनिया के हर व्यक्ति से  अलग हो गयी।
                        इनकी सोंच हो गयी कि जिस प्रकार से हमारा परिवार है उसी प्रकार देश का हर नागरिक हमारा परिवार है।
                        उस परिवार में जो भी मुलभुत सुविधाओं से वंचित है उसे समाज की मुख्य धारा से जोड़ा जाय। इस कार्य को करने के लिए इन्होने कुछ
                        सहयोगी सदस्यों के सहयोग से गरीबी मिटाओ अभियान की स्थापना की। श्याम प्रसाद जी का कहना है कि सेना में रहकर देश की सुरक्षा
                        करना होता है और सेना से वापस आने पर सैनिक को  समाज की सुरक्षा के साथ ही समाज की सेवा भी करना चाहिए  तथा सीमा से
                        समाज की ओर कथन को चरितार्थ करना चाहिए। चूँकि भारत एक समाजवादी देश है इसका मतलब है भारत में रहने वाले हर व्यक्ति का
                        राष्ट्रीय संपत्ति पर समान अधिकार होना चाहिए। देश की आजादी के 73 साल बीत जाने के बाद भी यह लागू नहीं हुआ। संगठन इसके
                        लिए लगातार प्रयासरत है। संगठन गरीबी, बेरोजगारी, भ्रष्टाचार, अशिक्षा जैसे मुद्दे पर तथा समाज सेवा पर कार्य कर रहा है।
                    </p>

                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About GMAS</h4>
                    <p class="text-muted mb-0"><em>आज देश की सबसे गम्भीर समस्या गरीबी व बेरोजगारी है। बेरोजगारों की फौज लगातार बढ़ती जा रही है। जब देश के सभी
                            लोगों को रोटी, कपड़ा, मकान, शिक्षा, स्वास्थ्य व रोजगार मिलेगा तभी देश पूर्ण रुप से खुशहाल तथा विकासशील देश होगा। इसलिए अब देश में
                            अनिवार्य रोजगार नीति कानून बनना अतिआवश्यक हो गया है।</em></p>
                </div>

                {{--<div class="p-4">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>--}}

                <div class="p-4">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="{{'https://www.facebook.com/gmasindia/'}}" class="text-primary"><em>Like on Facebook</em></a></li>
                        <li><img src="{{'/images/whatsapp.png'}}" width="15px" alt=""><em class="ml-2">+91 9102787075</em></li>
                        {{--<li><a href="#" class="text-info">Follow on Twitter</a></li>--}}

                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    {{-- <footer class="blog-footer">
         <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
         <p>
             <a href="#">Back to top</a>
         </p>
     </footer>--}}



@endsection