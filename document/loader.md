### 自动加载  
- thinkphp的加载器   
![](images/loader/init1.png) 
![](images/loader/init2.png) 
![](images/loader/init3.png) 

添加命名空间(thinkphp\library\think,thinkphp\library\trait路径添加)   
![](images/loader/init5.png) 
![](images/loader/init4.png)   

rumtime目录下的类注册    
![](images/loader/init7.png)  

extend扩展目录下的类注册   
![](images/loader/init6.png)   

- thinkphp的自定义异常注册  
![](images/loader/init8.png)    

- 注册伪装【门面类】   
![](images/loader/init9.png)    
注册保存结果如下  
![](images/loader/init10.png)    

- 伪装【门面类】的使用骚操作   
如App::xxx 或是经常用的Request:xxx()  
![](images/loader/facade1.png)    
![](images/loader/facade2.png)    