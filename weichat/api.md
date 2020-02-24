* var url = 'http://192.168.0.116/yima/weixin/';

# 1.获取首页聊天列表 #
* url:url+'chatlist.php',
* 方法：get,
* data:无,
* 返回的参数：

    	{
    		status: 0 || 1, 
			message: "查询成功", 
			result:[
				{
				id: "22",
				src: "face30.png",
				username: "孤雏",
				message: "不要再抱怨生活的艰辛，原来需要奋斗也是幸福的一种",
				}
			]
    	}
# 2.获取通讯录名单 #
* url:url+'maillist.php',
* 方法：get,
* data:无,
* 返回的参数：

    	{
    		status: 0 || 1, 
			message: "查询成功", 
			result:{
				A: [{
					id: "1",
					src: "face0.png",
					username: "爱你我心痛",
					phone: "18271637271",
					weixin: "nihao123",
					adress: "河南 洛阳",
				}],
				B:[{
					
				}]
			}
    	}

# 3.获取聊天内容 #
* 点击首页聊天列表进入子页面
* url:url+'getchat.php',
* 方法：post,
* data:{id：'id'},
* 返回的参数：

    	{
    		status: 0 || 1, 
			message: "查询成功", 
			result:{
				id: "2",
				src: "face1.png",
				username: "北梦",
				message: "一个人的快乐不是因为拥有的多，而是因为他计较的少",
			}
    	}

# 4.获取名片信息 #
* 点击通讯录列表进入子页面
* url:url+'/getcard.php',
* 方法：post,
* data:{id：'id'},
* 返回的参数：

    	{
    		status: 0 || 1, 
			message: "查询成功", 
			result:{
				id: "1",
				src: "face0.png",
				username: "爱你我心痛",
				phone: "18271637271",
				weixin: "nihao123",
				adress: "河南 洛阳",
			}
    	}

# 5.获取朋友圈数据 #
* url:url+'pengyouquan.php',
* 方法：post,
* data:{n：'获取第几页的数据'},//总共5也，0，1,2,3,4
* 返回的参数：

    	{
    		status: 0 || 1, 
			message: "查询成功", 
			result:[
				id: "1"
				src: "img/face37.png"
				username: "饮风"
				content: "这些明星真的是太有气质了，爱了"
				time: "10分钟前"
				imgs: ['photo/m1.png','photo/m2.png','photo/m3.png'],
			]
    	}