<?php
namespace Home\Controller;
use Think\Controller;
 
class FontsController extends Controller {
    public function myfonts(){
		header("Content-type: text/html; charset=utf-8"); 
        echo  '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":4,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正宋黑体","price":0,"fontType":2,"ttfPath":"yq0KZFbYIdiAPLErAEJJQFZxTZQ038.TTF","woffPath":"font/yq0KZVbYIFiAdBiGACV-zEHRTcE04.woff","fontFamily":"fangzheng_sht"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":5,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正祥隶体","price":0,"fontType":2,"ttfPath":"yq0KX1bYIXmAJ07yAHPjKCKVq-8944.TTF","woffPath":"font/yq0KXlbYIcSAH8wZADMjPFjaeoM71.woff","fontFamily":"fangzheng_xlt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":8,"buyTime":"2016-05-04","status":1,"sort":0,"license":0,"name":"汉仪中圆体","price":10,"fontType":3,"ttfPath":"yq0KZFbYJaWAdtkcAEDxLNGAnZI555.ttf","woffPath":"font/yq0KZFbYJaWAdcr2AC2znGfCGso23.woff","fontFamily":"hanyi_zhyt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":10,"buyTime":"2016-05-31","status":1,"sort":0,"license":0,"name":"黑体","price":0,"fontType":0,"ttfPath":"yq0KXlbYJrqAR59mACBsVH0YWoQ810.ttf","woffPath":"font/yq0KXlbYJruABPCXABIbNB9-3mY80.woff","fontFamily":"HT"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":11,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正古隶体","price":0,"fontType":2,"ttfPath":"yq0KXlbYJxiAIJ-4AGcaCEqvDJo959.TTF","woffPath":"font/yq0KXlbYJxmAGh4wAC9HBGBnHjQ62.woff","fontFamily":"fangzheng_glt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":44,"buyTime":"2016-05-04","status":1,"sort":0,"license":0,"name":"站酷高端黑","price":0,"fontType":1,"ttfPath":"yq0KYFb4ic2AeYZdADxOnHdwBQY313.ttf","woffPath":"font/yq0KYFb4ic2AW9TWABvBDC0QkJ036.woff","fontFamily":"zhanku_gdh"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":63,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"汉仪旗黑95","price":0,"fontType":3,"ttfPath":"yq0KYFb6XgKAU48TACsUrKkHnmU583.ttf","woffPath":"font/yq0KYVb6XgyAO3H0AB2qLM6xhF836.woff","fontFamily":"hanyi_qh95"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":64,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"汉仪文黑65","price":0,"fontType":3,"ttfPath":"yq0KYVb6Xi6AGiZoADG2iJ84jcA510.ttf","woffPath":"font/yq0KYVb6Xi-AG38HACDelLOEZv884.woff","fontFamily":"hanyi_wh65"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":82,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正彩云简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEsXCAIAi5AEM-fHazYXE119.TTF","woffPath":"font/yq0KYFcEsXGAMs2UACZNoE6GiW448.woff","fontFamily":"fangzheng_cyjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":83,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正琥珀简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEshGAMLb5ADKwqHQzdaA236.TTF","woffPath":"font/yq0KYVcEshGAOzsDABwU6GymbLE72.woff","fontFamily":"fangzheng_hpjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":84,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正姚体简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEstOAVwMfACGmmAccHM8863.TTF","woffPath":"font/yq0KYFcEssaACzkoABFvcNAAXNk69.woff","fontFamily":"fangzheng_ytjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":85,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正综艺简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEs0CAVKJsAB8bjOfHSbw425.TTF","woffPath":"font/yq0KYFcEs0CAD6NlAA96GLFuSdU43.woff","fontFamily":"fangzheng_zyjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":87,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正细黑一简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEtiCAeCDCADWFYHIWZjE082.TTF","woffPath":"font/yq0KYVcEti-AegZRABrtEISIdzs67.woff","fontFamily":"fangzheng_xhyjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":89,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正中等线简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEuL2AM6VRADTjlBiubp8851.TTF","woffPath":"font/yq0KYFcEuL2AWpDUABvcuCdfSds39.woff","fontFamily":"fangzheng_zdxxjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":90,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正粗等线简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEuReAXZRwADK3lN_ESaM600.TTF","woffPath":"font/yq0KYVcEuRiAUPNaABlvbL_-yS889.woff","fontFamily":"fangzheng_cdxjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":91,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正黑体简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEuZmAJzMFAC31pJ9SGNY426.TTF","woffPath":"font/yq0KYVcEuZmALVW7ABfonEBEETY96.woff","fontFamily":"fangzheng_htjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":93,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正超粗黑简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEueyATkwpABy7JH_yysk087.TTF","woffPath":"font/yq0KYVcEufqAT2ZuAA-4HO5xW4k62.woff","fontFamily":"fangzheng_cchjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":94,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正隶变简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEulOAPsC-AEB2FH0gaIc723.TTF","woffPath":"font/yq0KYVcEumGAZPbMACEgCFBZqFc52.woff","fontFamily":"fangzheng_lbjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":95,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正隶书简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEuqeACvbXAD8kfNOX7uU361.TTF","woffPath":"font/yq0KYVcEuqiAPUb-AB9NED0mtsY70.woff","fontFamily":"fangzheng_lsjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":96,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正隶二简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEuxWALQuWAEvN2KCmkBY925.TTF","woffPath":"font/yq0KYVcEuxaAfFOIACbvsIjNTlw28.woff","fontFamily":"fangzheng_l2jt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":97,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正魏碑简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEu8iAfbUPAEzAxOGt7BU649.TTF","woffPath":"font/yq0KYVcEu9aALxmeACdLuLDf1QE36.woff","fontFamily":"fangzheng_wbjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":98,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正行楷简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEvC6AOqFXAEy-uCwL7s8007.TTF","woffPath":"font/yq0KYFcEvCGABLNLACfF2OlCU3M28.woff","fontFamily":"fangzheng_xkjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":99,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正舒体简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEvISAGCrlAFHlqBODk5I123.TTF","woffPath":"font/yq0KYFcEvIWAQFHJAClfOH_H-Y890.woff","fontFamily":"fangzheng_stjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":100,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正宋一简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEvQOALwyuAD7z_OR2PUA965.TTF","woffPath":"font/yq0KYVcEvRKAVt9XACAUuGylIJo32.woff","fontFamily":"fangzheng_s1jt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":101,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正报宋简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEvUGAdUhSAD1gAFxtCJ0367.TTF","woffPath":"font/yq0KYVcEvU-AM24sAB-PtCt58nU64.woff","fontFamily":"fangzheng_bsjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":102,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正书宋简体","price":0,"fontType":2,"ttfPath":"yq0KYFcEvbyANRv2AC8ETG9j0uc496.TTF","woffPath":"font/yq0KYVcEvcqAMtzAABsMgO2NmHY42.woff","fontFamily":"fangzheng_ssjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":103,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正宋三简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEvfKAIFQDADPfXIiBbpE795.TTF","woffPath":"font/yq0KYFcEveSAWuaRABmA0GvUioQ71.woff","fontFamily":"fangzheng_s3jt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":105,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正小标宋简体","price":0,"fontType":2,"ttfPath":"yq0KYVcEvkOAPH5qAEFh3NywiLc610.TTF","woffPath":"font/yq0KYVcEvkOAOfmJACGsZBgnrTc21.woff","fontFamily":"fangzheng_xbsjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":122,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正楷体简体","price":0,"fontType":2,"ttfPath":"yq0KYFcIXC6AJMp6ADvvrC0tjLk972.TTF","woffPath":"font/yq0KYVcIXD6AEOOqACEHfMFbrnc21.woff","fontFamily":"fangzheng_ktjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":125,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正美黑简体","price":0,"fontType":2,"ttfPath":"yq0KYFcIXIaAWkWdACRmXD-q8Jk967.TTF","woffPath":"font/yq0KYVcIXJaAbQ5XABLQZLRXUok84.woff","fontFamily":"fangzheng_mhjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":126,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正细圆简体","price":0,"fontType":2,"ttfPath":"yq0KYFcIXSmAJmyLADGWHNaE2hE182.TTF","woffPath":"font/yq0KYVcIXTmAMVtbABoJfNi2LFA10.woff","fontFamily":"fangzheng_xyjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":127,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正准圆简体","price":0,"fontType":2,"ttfPath":"yq0KYVcIXVKAbf-0AC7GPH2MUaQ043.TTF","woffPath":"font/yq0KYVcIXVOANTqHABgDEJLi53Y60.woff","fontFamily":"fangzheng_zyjt2"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":128,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"方正粗圆简体","price":0,"fontType":2,"ttfPath":"yq0KYFcIXVmAHnpOAC5IXL71wCI026.TTF","woffPath":"font/yq0KYVcIXWmAACJ6ABh_RNJEr8k59.woff","fontFamily":"fangzheng_cyjt"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":441,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"Aa版宋体","price":0,"fontType":5,"ttfPath":"86a7fd70-9057-4e11-a8f4-1ca14b6e590f.ttf","woffPath":"font/aa32ccb0-43c7-4fb8-a9c3-ab36ef7af990.woff","fontFamily":"nnDMol"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":442,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"Aa扁黑体","price":0,"fontType":5,"ttfPath":"96d20704-75e8-4890-9e22-982ba88c7659.ttf","woffPath":"font/d071622f-4846-45f5-9471-1d5ea63325cd.ttf","fontFamily":"WAp3ok"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":443,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"Aa电影时光","price":0,"fontType":5,"ttfPath":"7a6d24e3-311d-46bb-af6c-29ef18fce597.ttf","woffPath":"font/6e49266d-6116-4199-971a-c93ba8291c39.woff","fontFamily":"j5Svon"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":444,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"Aa楷体","price":0,"fontType":5,"ttfPath":"b11fc69e-97b4-437b-af01-9322f71e1a63.ttf","woffPath":"font/56ed5e95-af3b-4be4-a577-6c608d718686.woff","fontFamily":"JJRIHq"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":445,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"Aa娜娜体","price":0,"fontType":5,"ttfPath":"5ad1d9f4-09f3-47bf-adb9-8df5830f670f.ttf","woffPath":"font/3c4df541-29de-46d1-ba14-f13115095aa1.woff","fontFamily":"VA0RsI"},{"userId":"4a2d8af94c7d4bf0014c8459b39b3789","id":447,"buyTime":"2016-08-11","status":1,"sort":0,"license":1,"name":"Aa细圆体","price":0,"fontType":5,"ttfPath":"924889c2-96fc-411b-91df-5d3a5bbc4f49.ttf","woffPath":"font/74e83c80-066c-4730-ab19-91582e422bcf.woff","fontFamily":"LPD8R6"}]}';
    }
	public function info(){
		header("Content-type: text/html; charset=utf-8"); 
		echo '{"success":true,"code":200,"msg":"操作成功","obj":null,"map":null,"list":[{"id":61,"name":"艺术字","price":0,"companyPrice":0,"bizType":"0","type":3,"ttfPath":"group4/M00/9A/27/yq0KYFb6XWyAXiEEAIoHgAKWb0s711.ttf","woffPath":"group4/M00/8E/7E/yq0KYVb6XXaAJJ7zAFTZsHxDsNA42.woff","simplePath":null,"preWoffPath":"group4/M00/9A/27/yq0KYFb6XWyATgOjAAALyCbNI3M87.woff","preTtfPath":"group4/M00/8E/7E/yq0KYVb6XXWAZgRmAAALyCbNI3M452.ttf","status":0,"createUser":"ff8080814f6eda43014f787b18c02fdd","createTime":1459248531000,"updateTime":1459248531000,"sort":4,"fontFamily":"hanyi_qh35","previewText":"易企秀免费简单好用"}]}';
	}
}

