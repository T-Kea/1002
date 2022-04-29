

        //获取元素
        var ckAll = document.getElementById('ckAll');
        var cks = document.getElementsByName('ck');
        var trs = document.getElementsByClassName('inline');
        var allCount = document.getElementById('allCount');
        var allPrice = document.getElementById('allPrice');
        var countInput = document.getElementsByClassName('count-input');

        //计算总数
        function sumCount(){
            var sum = 0;
            for(var i=0;i<cks.length;i++){
                if(cks[i].checked == true){
                    var num = Number(countInput[i].value);
                    sum += num;
                }
            }
            allCount.innerHTML = sum;
        }

        //计算总价
        function sumPrice(){
            var sum = 0;
            for(var i=0;i<cks.length;i++){
                if(cks[i].checked == true){
                    var p = Number(trs[i].children[5].innerHTML);
                    sum += p;
                }
            }
            allPrice.innerHTML = sum.toFixed(2);
        }
        
        //计算每一行的总价
        function inlinePrice(){
            for(var i=0;i<trs.length;i++){
                //获取每一行单价
                var price = Number(trs[i].children[3].innerHTML);
                //获取数量
                var num = Number(trs[i].children[4].children[1].value);
                //小计
                trs[i].children[5].innerHTML = (price * num).toFixed(2);

            }
        }

        //数量增加
        function addCount(e){
            // 获取input标签里的value值,数量
            var num =parseInt(e.previousElementSibling.value) ;
            //数量加1
            e.previousElementSibling.value = num+1;
            inlinePrice();
            sumPrice();
            sumCount();
        }

        //数量递减
        function reduceCount(e){
            var num = parseInt(e.nextElementSibling.value);
            if(num <= 0){
                alert("不能再减了");
                return;
            }

            e.nextElementSibling.value = num-1;
            inlinePrice();
            sumPrice();
            sumCount();
        }
       
        //全选和反选
        function checkAll(){
            for(var i=0;i<cks.length;i++){
                cks[i].checked = ckAll.checked;
            }
            sumPrice();
            sumCount();
        }

        //复选框的交互
        function check(){
            // 判断四个小的复选框有没有没被选中的,如果有一个,就把ckAllde的checked 变为false
            for(var i=0;i<cks.length;i++){
                if(cks[i].checked == false){
                    ckAll.checked = false;
                    sumPrice();
                    sumCount();
                    // 有一个小复选框为false,就不需要对其他复选框进行判断了,直接中止函数下面的执行语句
                    return;
                }
            }
            //循环结束后,如果小复选框checked的值都为true,ckAll的checked的值就为true
            ckAll.checked = true;
            sumPrice();
            sumCount();
        }




