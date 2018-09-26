create table if not exists `users` (
      `id` int(11) not null AUTO_INCREMENT,
      `email` varchar(30) not null default '' comment '邮箱地址',
      `name` varchar(50) not null default '' comment '用户名',
      `password` varchar(64) not null comment '密码',
      `avatar` varchar(255) not null default '' comment '用户头像',
      PRIMARY KEY (`id`),
      UNIQUE key `uq_e`(`email`),
      KEY `idx_n`(`name`)
)Engine=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


alter table users add column `deleted_at` int(10) not null comment '删除时间';
alter table users add column `created_at` int(10) not null comment '创建时间';
alter table users add column `updated_at` int(10) not null comment '更新时间';